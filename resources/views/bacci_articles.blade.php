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
    	<title> Workplace of Today </title>

        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_genDesigns.css') }}">
    </head>

    <body>
        @include('layouts/bacci_web_bg')

        <div id = "articlespage">
            <div class = "main_articles_content">
                <i>
                    <h3> Early deaths rising in workers using methylene chloride paint strippers </h3>
                    <p>
                        First comprehensive review in US reveals more fatalities than expected due to deadly chemical
                        <br>
                        Source: University of California - San Francisco
                        <br>
                        April 19, 2021
                    </p>
                </i>

                <hr>
                <br>

                <p><b>
                    Researchers and physicians from the Occupational Safety and Health Administration (OSHA) and UC San Francisco have found that deaths of workers using methylene chloride paint strippers are on the rise. The solvent is widely used in paint strippers, cleaners, adhesives and sealants.
                </b></p>

                <p>
                    The study is the first comprehensive review of fatalities linked to the deadly chemical in the United States and identified more deaths than previously reported.
                </p>

                <p>
                    The Environmental Protection Agency (EPA) has acknowledged 53 fatalities connected to the chemical from 1980 to 2018. The new study identified 85 deaths over the same period, most of them occurring in occupational settings (87 percent). The study is published April 19, 2021, in JAMA Internal Medicine.
                </p>

                <p>
                    The authors urged action from the EPA to limit use of the chemical and prevent future deaths."It is unacceptable that these workers died simply because they were doing their job," said lead author Annie Hoang, a UCSF medical student and research fellow at UCSF's Program on Reproductive Health and the Environment. "I hope the EPA will do its job to protect our workers and save lives."
                </p>

                <p>
                    The researchers believe that methylene chloride fatalities are undercounted in the United States due to fragmented public health reporting. To identify deaths from the chemical, the researchers undertook a massive search of different sources, including published scientific papers and government databases, compiling information that included medical records and autopsy findings, where available. Their analysis found an increase since 2000 in occupational fatalities related to both paint stripping and to bathroom construction, due to stripping bathtubs.
                </p>

                <p>
                    In early 2017, EPA proposed a rule banning almost all methylene chloride strippers in both the workplace and for consumer use. But in 2019 under new leadership, EPA limited the ban to consumer products while still allowing commercial use to continue unchecked.
                </p>

                <p>
                    "Based on our findings, workers are still at risk from methylene chloride products," said Kathleen Fagan, MD, MPH, former Medical Officer in the Office of Occupational Medicine and Nursing at OSHA and one of the study's researchers. "Health care providers have a critical role to play in preventing deaths by counseling at-risk patients on risk reduction and providing resources on safer alternatives to methylene chloride."
                </p>

                <p>
                    The paper reported that while regulatory policies over the last 25 years mandated product labeling and worker protections, fatalities continued during that time, with a higher proportion of recent deaths tied to the use of paint stripping products. The vast majority of deaths were among men (93.8 percent). Of the 85 fatalities, in 70 cases that had specific information about age, the median age was 31.
                </p>

                <p>
                    The researchers concluded that despite regulatory efforts to address the toxicity of methylene chloride for consumers and workers, fatalities are continuing in the U.S., particularly in occupational settings. They said that prevention should emphasize safer substitutes, not hazard warnings or reliance on personal protective equipment.
                </p>

                <p>
                    "Safer alternatives to methylene chloride are available and in widespread use," said senior author Veena Singla, PhD, a senior scientist at the Natural Resources Defense Council. Previously, she was director of science and policy with UCSF's Program on Reproductive Health and the Environment.
                </p>

                <p>
                    "The science is clear," Singla said. "It is past time to eliminate this deadly chemical and prevent any further tragic loss of life."
                </p>


                <br>
                <br>
                <br>
                <br>
                <br>


                <i>
                    <h3> COVID-19 and labour constraints: Recalling former health care workers not enough </h3>
                    <p>
                        Report examines factors affecting U.S. labour supply in essential industries during the pandemic
                        <br>
                        Source: McGill University
                        <br>
                        April 2, 2020
                    </p>
                </i>

                <hr>
                <br>

                <p><b>
                    While the COVID-19 pandemic has already resulted in mass layoffs in several industries, other essential industries will instead face critical workforce shortages, according to a new report. Social distancing, school and daycare closures, and measures to protect those people who are most at-risk limit the pool of workers firms can draw upon. How important will these constraints turn out to be, especially in essential industries?
                </b></p>

                <p>
                    To find out, researchers from McGill University, University of Rochester, and Stony Brook University provide a snapshot of the situation in the United States drawing on data from the Survey of Income and Program Participation, the American Community Survey, and the National Health and Interview Survey.
                </p>

                <p>
                    "To minimize the spread of the pandemic, state governments are increasingly restricting who can work outside the home to workers in essential industries. Roughly 60% of employment is in these industries," says Fabian Lange, a professor of economics at McGill University and Canada Research Chair in Labour and Personnel Economics. "Reducing the strain on the health care workforce will be essential as they stand on the front lines of the battle against the pandemic."
                </p>

                <h3> Childcare </h3>
                <p>
                    According to the researchers, an important factor limiting the labour supply of people who can work outside the home is childcare. School and daycare closures have made it substantially more difficult for some employees to go to work. Because of social distancing, grandparents, friends, and neighbors are less able to pick up any of the slack.
                </p>

                <p>
                    Roughly a quarter of the U.S. workforce has young children at home and may therefore be constrained from full-time work. Rates are slightly higher in essential industries and highest in health care, where 5.6 million workers have at least one child under 12. Health care workers are also more likely to be single parents, and especially single mothers. It is therefore imperative to implement policies addressing childcare for health care workers to maintain labour supply in this crucial sector.
                </p>

                <h3> At-risk populations in the workforce </h3>
                <p>
                    "Another limiting factor on labour supply could be attempts to limit outside contact for members of the household who are most at-risk. At-risk populations include those aged 65 and over, people with compromised immune systems, and people with underlying medical conditions," says Lange.
                </p>

                <p>
                    About one-fifth of the workforce is in an at-risk group or lives with someone who is more likely to suffer severe consequences from COVID-19. In health care, 25% of workers fall into this category. Overall, 18.5 million essential (non-health) workers and 4.6 million health care workers are in a high-risk group that limits their ability to participate in the labour force in order to protect themselves or a family member with underlying conditions.
                </p>

                <h3> Supply of health care workers </h3>
                <p>
                    According to Lange, health care workers are subject to additional constraints. "They are under tremendous stress -- not only because they face an increase in patients requiring intensive care, but also because of the likelihood that they themselves become infected."
                </p>

                <p>
                    The researchers note that one response has been to encourage former nurses and health care workers to return from retirement and other jobs. However, the reserve pool of potential health care workers is relatively small after accounting for the risks they face. The researchers estimate that if every one-time nurse not currently in nursing was recalled, this would increase the number of nurses by 27%. More broadly in health care, the potential pool could add up to 40% more workers. Nevertheless, two-thirds of these are either in a high-risk group or live in a household with a member from a high-risk group.
                </p>
            </div>
            <div class = "articles_title"></div>
        </div>

        @include('layouts/bacci_authors')
        @include('layouts/bacci_header')
        @include('layouts/bacci_footer')
    </body>
</html>
