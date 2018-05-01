<html>
    <body>
        <p>{!! Html::image(Theme::url('images/home_logo_mail.png')) !!}</p>
        <p>{{ trans('themes::contact.mail.dear') }} {{ $first_name }} {{ $last_name }}</p>
        <p>{!! trans('themes::contact.mail.message', ['phone'=>setting('theme::phone')]) !!}</p>
        <p><a href='http://www.cubesankara.com.tr'>http://www.cubesankara.com.tr</a></p>
        <p style="color:red;">{!! trans('themes::contact.mail.date', ['date'=>\Carbon\Carbon::now()->format('d.m.Y H:i')]) !!}</p>
        <p style="color:red;">{!! trans('themes::contact.mail.ip', ['ip'=>request()->getClientIp()]) !!}</p>
    </body>
</html>