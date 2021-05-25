<!--
    CS405_Group 03
    "The Workplace of Today" (Static Website)

    Members:
    Aguilar, Edward John    ->  Assistant Developer
    Batu, Laurence Angelo   ->  Project Leader
                                Main Developer

    Chiangco, Crista Mae    ->  Website and Pages Layout Handler
                                Main Designer
    Casi, Maria Kyla        ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
    Inodeo, Chara Mae       ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
-->

<!DOCTYPE html>

<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_frontpage.css') }}">
        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_genDesign.css') }}">

        @yield('meta')
    </head>

    <body>
        @yield('web_bg')

        <div class = "frontpage_content">
            <table class = "tbl_frontpage">
                <tr>
                    <td class = "imghere">
                        <img class = "pic_source" src = "/icons/dyaryo3.jpg">
                    </td>
                    <td  class = "sources">
                        <h3> Early deaths rising in workers using methylene chloride paint strippers </h3>
                        <p>
                            Researchers and physicians from the Occupational Safety and Health Administration (OSHA) and UC San Francisco have found that deaths of workers using methylene chloride paint strippers are on the rise...
                        </p>
                    </td>

                    <td class = "readmorebtn">
                        <a class = "readmore" href = "/articles"> Read More </a>
                    </td>
                </tr>
            </table>

            <table class = "tbl_frontpage">
                <tr>
                    <td class = "imghere">
                        <img class = "pic_source" src = "/icons/dyaryo3.jpg">
                    </td>
                    <td  class = "sources">
                        <h3> NIOSH questionnaire aimed at gauging, enhancing worker well-being </h3>
                        <p>
                            Washington —NIOSH has created a questionnaire intended to help employers assess and improve worker well-being by collecting employee observations of various aspects of their physical ...
                        </p>
                    </td>

                    <td class = "readmorebtn">
                        <a class = "readmore" href = "/news"> Read More </a>
                    </td>
                </tr>
            </table>

            <table class = "tbl_frontpage">
                <tr>
                    <td class = "imghere">
                        <img class = "pic_source" src = "/icons/dyaryo3.jpg">
                    </td>
                    <td  class = "sources">
                        <h3> COVID-19 and labour constraints: Recalling former health care workers not enough </h3>
                        <p>
                            While the COVID-19 pandemic has already resulted in mass layoffs in several industries, other essential industries will instead face critical workforce shortages, according to a new report. Social distancing, s...
                        </p>
                    </td>

                    <td class = "readmorebtn">
                        <a class = "readmore" href = "/articles"> Read More </a>
                    </td>
                </tr>
            </table>

            <table class = "tbl_frontpage">
                <tr>
                    <td class = "imghere">
                        <img class = "pic_source" src = "/icons/dyaryo3.jpg">
                    </td>
                    <td  class = "sources">
                        <h3> SHRM Survey: Some Workers Favor Required Vaccinations </h3>
                        <p>
                        Nearly two-thirds—62 percent—of employed Americans and those laid off or furloughed do not think the government should require people to get a COVID-19 vaccination, according to new research from ...
                        </p>
                    </td>

                    <td class = "readmorebtn">
                        <a class = "readmore" href = "/news"> Read More </a>
                    </td>
                </tr>
            </table>
        </div>
        
        @yield('header_body')
        @yield('footer_body')
    </body>
</html>
