<!DOCTYPE html>
<html lang="tr">
<head>
    <style>
        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-Bold.ttf") }}) format("truetype");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-BoldItalic.ttf") }}) format("truetype");
            font-weight: 700;
            font-style: italic;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-ExtraBold.ttf") }}) format("truetype");
            font-weight: 800;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-ExtraBoldItalic.ttf") }}) format("truetype");
            font-weight: 800;
            font-style: italic;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-Light.ttf") }}) format("truetype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-LightItalic.ttf") }}) format("truetype");
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-Medium.ttf") }}) format("truetype");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-MediumItalic.ttf") }}) format("truetype");
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-Regular.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-SemiBold.ttf") }}) format("truetype");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-SemiBoldItalic.ttf") }}) format("truetype");
            font-weight: 600;
            font-style: italic;
        }

        @font-face {
            font-family: 'kvkkasistan';
            src: url({{ storage_path("fonts/Kvkkasistan-Italic.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: italic;
        }
        * {
            font-family: "kvkkasistan"!important;
            font-size: 12pt;
        }
        @page {
            margin-left: 2cm;
            margin-right: 2cm;
        }
        .header, .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0px;
        }
        .footer {
            bottom: 0px;
        }
        .pagenum:before {
            content: counter(page);
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body>
    {!! $bodyContent !!}
    <script type="text/php">
        if (isset($pdf)) {
            $pdf->page_script('
                $text = __(":pageNum/:pageCount", ["pageNum" => $PAGE_NUM, "pageCount" => $PAGE_COUNT]);
                $font = $fontMetrics->get_font("gumrukle", "normal");
                $size = 9;
                $color = array(0,0,0);
                $word_space = 0.0;
                $char_space = 0.0;
                $angle = 0.0;

                $textWidth = $fontMetrics->getTextWidth($text, $font, $size);

                $x = ($pdf->get_width() - $textWidth) / 2;
                $y = $pdf->get_height() - 35;

                $pdf->text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
            ');
        }
    </script>
</body>
</html>
