<html>
    <body>
        <p>Merhaba</p>
        <p>Cubes Ankara web sitesinde yer alan Bilgi formu doldurulup gönderilmiştir. Formda doldurulan bilgiler aşağıda verilmiştir.</p>

        @foreach (config('asgard.contact.config.fields') as $fieldName => $options)
            <p><strong>{{ trans('contact::contacts.form.'.$fieldName, [], LaravelLocalization::getDefaultLocale()) }}</strong>: {{ $contact->{$fieldName} }}</p>
        @endforeach
            <p><strong>Dil:</strong> {{ LaravelLocalization::getCurrentLocaleNative() }}</p>
        <hr />
        <p>En kısa zamanda müşterinizle/web sitesi ziyaretçinizle temasa geçerek bilgi isteğini karşılayınız.</p>
        <p style="color:red;"><strong>Formun gönderildiği tarih/saat:</strong> {{ \Carbon\Carbon::now()->format('d.m.Y H:i') }}</p>
        <p style="color:red;"><strong>Formu Gönderen IP :</strong> {{ Request::getClientIp() }}</p>
    </body>
</html>