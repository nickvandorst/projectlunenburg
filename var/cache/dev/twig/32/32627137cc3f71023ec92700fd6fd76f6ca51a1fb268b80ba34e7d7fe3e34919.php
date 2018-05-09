<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3783d2f4f4a6760f3dc96be15767e823683db08bf610c4266348d66c1c57cd0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_81b41c2657cec768a4dff50eb2905cfa1f7cdfcd12e45e4eabbba4cdbaf66606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b41c2657cec768a4dff50eb2905cfa1f7cdfcd12e45e4eabbba4cdbaf66606->enter($__internal_81b41c2657cec768a4dff50eb2905cfa1f7cdfcd12e45e4eabbba4cdbaf66606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_803050f8bf607eb28809fe36f5f1c4772145265629c66ba347e97cc19c26b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803050f8bf607eb28809fe36f5f1c4772145265629c66ba347e97cc19c26b534->enter($__internal_803050f8bf607eb28809fe36f5f1c4772145265629c66ba347e97cc19c26b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
=======
        $__internal_56f513209f8e6848b5797f626d62a0053cc13cd15ef25f8d1df8631649e1b1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f513209f8e6848b5797f626d62a0053cc13cd15ef25f8d1df8631649e1b1ad->enter($__internal_56f513209f8e6848b5797f626d62a0053cc13cd15ef25f8d1df8631649e1b1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_313fe4ec6f10196fb8f885ab03574bc37e326d038d35ea409fb2b9a5fb0f6664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313fe4ec6f10196fb8f885ab03574bc37e326d038d35ea409fb2b9a5fb0f6664->enter($__internal_313fe4ec6f10196fb8f885ab03574bc37e326d038d35ea409fb2b9a5fb0f6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        ";
        // line 216
        $this->displayBlock('head', $context, $blocks);
        // line 217
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    ";
        // line 222
        echo twig_include($this->env, $context, "@Twig/symfony.svg");
        echo "
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 247
        $this->displayBlock('body', $context, $blocks);
        // line 248
        echo "            </div>
        </div>
    </body>
</html>
";
        
<<<<<<< HEAD
        $__internal_81b41c2657cec768a4dff50eb2905cfa1f7cdfcd12e45e4eabbba4cdbaf66606->leave($__internal_81b41c2657cec768a4dff50eb2905cfa1f7cdfcd12e45e4eabbba4cdbaf66606_prof);

        
        $__internal_803050f8bf607eb28809fe36f5f1c4772145265629c66ba347e97cc19c26b534->leave($__internal_803050f8bf607eb28809fe36f5f1c4772145265629c66ba347e97cc19c26b534_prof);
=======
        $__internal_56f513209f8e6848b5797f626d62a0053cc13cd15ef25f8d1df8631649e1b1ad->leave($__internal_56f513209f8e6848b5797f626d62a0053cc13cd15ef25f8d1df8631649e1b1ad_prof);

        
        $__internal_313fe4ec6f10196fb8f885ab03574bc37e326d038d35ea409fb2b9a5fb0f6664->leave($__internal_313fe4ec6f10196fb8f885ab03574bc37e326d038d35ea409fb2b9a5fb0f6664_prof);
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_6c3ef9c87693a938a0b2a081deb921da0b57494805b0680e6a5b993e8e92590d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3ef9c87693a938a0b2a081deb921da0b57494805b0680e6a5b993e8e92590d->enter($__internal_6c3ef9c87693a938a0b2a081deb921da0b57494805b0680e6a5b993e8e92590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea5fea5057de640349fbbc3884bafa9d2316e661001129c8e2c74703a46a7c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5fea5057de640349fbbc3884bafa9d2316e661001129c8e2c74703a46a7c2c->enter($__internal_ea5fea5057de640349fbbc3884bafa9d2316e661001129c8e2c74703a46a7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea5fea5057de640349fbbc3884bafa9d2316e661001129c8e2c74703a46a7c2c->leave($__internal_ea5fea5057de640349fbbc3884bafa9d2316e661001129c8e2c74703a46a7c2c_prof);

        
        $__internal_6c3ef9c87693a938a0b2a081deb921da0b57494805b0680e6a5b993e8e92590d->leave($__internal_6c3ef9c87693a938a0b2a081deb921da0b57494805b0680e6a5b993e8e92590d_prof);
=======
        $__internal_f66f27f804584839e5661fc1ad40db65fcf83e903a84235a4f55cfc87f010313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66f27f804584839e5661fc1ad40db65fcf83e903a84235a4f55cfc87f010313->enter($__internal_f66f27f804584839e5661fc1ad40db65fcf83e903a84235a4f55cfc87f010313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eeaab40d32c63f145edbd22c73c2845f7ae0e4846b85f4cb4cc3b16f97002e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaab40d32c63f145edbd22c73c2845f7ae0e4846b85f4cb4cc3b16f97002e73->enter($__internal_eeaab40d32c63f145edbd22c73c2845f7ae0e4846b85f4cb4cc3b16f97002e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eeaab40d32c63f145edbd22c73c2845f7ae0e4846b85f4cb4cc3b16f97002e73->leave($__internal_eeaab40d32c63f145edbd22c73c2845f7ae0e4846b85f4cb4cc3b16f97002e73_prof);

        
        $__internal_f66f27f804584839e5661fc1ad40db65fcf83e903a84235a4f55cfc87f010313->leave($__internal_f66f27f804584839e5661fc1ad40db65fcf83e903a84235a4f55cfc87f010313_prof);
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

    }

    // line 216
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e38c3c39537f4ec857c13121f4eabdc473f57f2ed7da89ea37c3167d5d9c6ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38c3c39537f4ec857c13121f4eabdc473f57f2ed7da89ea37c3167d5d9c6ba5->enter($__internal_e38c3c39537f4ec857c13121f4eabdc473f57f2ed7da89ea37c3167d5d9c6ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91949a3a901e03905ebdf6852364cbc4138d07f8438447adba8cfde0df2afc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91949a3a901e03905ebdf6852364cbc4138d07f8438447adba8cfde0df2afc11->enter($__internal_91949a3a901e03905ebdf6852364cbc4138d07f8438447adba8cfde0df2afc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91949a3a901e03905ebdf6852364cbc4138d07f8438447adba8cfde0df2afc11->leave($__internal_91949a3a901e03905ebdf6852364cbc4138d07f8438447adba8cfde0df2afc11_prof);

        
        $__internal_e38c3c39537f4ec857c13121f4eabdc473f57f2ed7da89ea37c3167d5d9c6ba5->leave($__internal_e38c3c39537f4ec857c13121f4eabdc473f57f2ed7da89ea37c3167d5d9c6ba5_prof);
=======
        $__internal_86e494659047f78145951375bda7784a8d7ac4fc895639f04170eb9a2e2afd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e494659047f78145951375bda7784a8d7ac4fc895639f04170eb9a2e2afd80->enter($__internal_86e494659047f78145951375bda7784a8d7ac4fc895639f04170eb9a2e2afd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16ccbfd757b74f334769bb4f3fe1621e04298adc6dc2a5e36ee51a46fcb21c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ccbfd757b74f334769bb4f3fe1621e04298adc6dc2a5e36ee51a46fcb21c19->enter($__internal_16ccbfd757b74f334769bb4f3fe1621e04298adc6dc2a5e36ee51a46fcb21c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_16ccbfd757b74f334769bb4f3fe1621e04298adc6dc2a5e36ee51a46fcb21c19->leave($__internal_16ccbfd757b74f334769bb4f3fe1621e04298adc6dc2a5e36ee51a46fcb21c19_prof);

        
        $__internal_86e494659047f78145951375bda7784a8d7ac4fc895639f04170eb9a2e2afd80->leave($__internal_86e494659047f78145951375bda7784a8d7ac4fc895639f04170eb9a2e2afd80_prof);
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

    }

    // line 247
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ac5070f67a023dd7ccbb6c7e8ec27eaac4b8a326dd50e1b9b62c7ccfb956bbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5070f67a023dd7ccbb6c7e8ec27eaac4b8a326dd50e1b9b62c7ccfb956bbdc->enter($__internal_ac5070f67a023dd7ccbb6c7e8ec27eaac4b8a326dd50e1b9b62c7ccfb956bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87464f987deac0ae04be04922977dffb126f54230f92b43bff0782fedfea7dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87464f987deac0ae04be04922977dffb126f54230f92b43bff0782fedfea7dbf->enter($__internal_87464f987deac0ae04be04922977dffb126f54230f92b43bff0782fedfea7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87464f987deac0ae04be04922977dffb126f54230f92b43bff0782fedfea7dbf->leave($__internal_87464f987deac0ae04be04922977dffb126f54230f92b43bff0782fedfea7dbf_prof);

        
        $__internal_ac5070f67a023dd7ccbb6c7e8ec27eaac4b8a326dd50e1b9b62c7ccfb956bbdc->leave($__internal_ac5070f67a023dd7ccbb6c7e8ec27eaac4b8a326dd50e1b9b62c7ccfb956bbdc_prof);
=======
        $__internal_12ab8834b2cadc5441b7dbd9dc325568c855050445ce22eebe8dca46aff128b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ab8834b2cadc5441b7dbd9dc325568c855050445ce22eebe8dca46aff128b7->enter($__internal_12ab8834b2cadc5441b7dbd9dc325568c855050445ce22eebe8dca46aff128b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2015a9ccb6a5b012e3304d3e189877c7767f3cd8d29d88f7f8b6fe4670c98038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2015a9ccb6a5b012e3304d3e189877c7767f3cd8d29d88f7f8b6fe4670c98038->enter($__internal_2015a9ccb6a5b012e3304d3e189877c7767f3cd8d29d88f7f8b6fe4670c98038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2015a9ccb6a5b012e3304d3e189877c7767f3cd8d29d88f7f8b6fe4670c98038->leave($__internal_2015a9ccb6a5b012e3304d3e189877c7767f3cd8d29d88f7f8b6fe4670c98038_prof);

        
        $__internal_12ab8834b2cadc5441b7dbd9dc325568c855050445ce22eebe8dca46aff128b7->leave($__internal_12ab8834b2cadc5441b7dbd9dc325568c855050445ce22eebe8dca46aff128b7_prof);
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 247,  321 => 216,  304 => 6,  290 => 248,  288 => 247,  260 => 222,  253 => 217,  251 => 216,  38 => 6,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>{% block title %}{% endblock %}</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    {{ include('@Twig/symfony.svg') }}
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
