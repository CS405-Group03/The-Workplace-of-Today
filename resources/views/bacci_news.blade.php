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

        <a id = "news01"> </a>
        <div class = "main_news_content">

            <i>
                <h3> NIOSH questionnaire aimed at gauging, enhancing worker well-being </h3>

                <p>
                    By News Update
                    <br>
                    April 21, 2021
                </p>
            </i>

            <hr>
            <br>

            <p>
                Washington —NIOSH has created a questionnaire intended to help employers assess and improve worker well-being by collecting employee observations of various aspects of their physical and mental health on and off the job.
            </p>

            <p>
                The NIOSH Worker Well-Being Questionnaire, or WellBQ, includes 68 questions shaped by the worker well-being framework developed by the agency, in conjunction with the nonprofit research institute RAND Corp. The free, anonymous questionnaire is estimated to take 15 minutes to complete and covers topics such as work evaluation and experience; workplace policies and culture; workplace physical environment and safety climate; health status; and home, community and society.
            </p>

            <p class = "a"> The questions include: </p>

            <ul>
                <li class = "list1"> Because of a physical, mental or emotional condition, do you have serious difficulty concentrating, remembering or making decisions? </li>
                <li class = "list2"> Are you limited in the kind or amount of work you can do because of a physical, mental or emotional problem? </li>
                <li class = "list3"> How often do you get the social and emotional support you need from friends, family or others outside of work? </li>
            </ul>

            <p>
                Additionally, multiple exercises call for responses to a series of related statements based on the worker’s level of agreement. The worker then calculates the average to determine their score for each exercise. For example, one section asks respondents to gauge to what extent the statements below are applicable to evaluate the level of work culture support:
            </p>

            <ul>
                <li class = "list4"> At my organization, I am treated with respect. </li>
                <li class = "list5"> My organization values my contributions. </li>
                <li class = "list6"> My organization cares about my general satisfaction at work. </li>
                <li class = "list7"> My organization is willing to extend resources to help me perform my job to the best of my ability. </li>
                <li class = "list8"> I receive recognition for a job well done </li>
            </ul>

            <p>
                “Worker well-being is a unifying concept that characterizes quality of life with respect to a person’s working conditions, circumstances outside of work, and physical and mental health status,” NIOSH Director John Howard said in a press release. “NIOSH is excited to offer this new tool that anyone can use to evaluate worker well-being in order to help identify opportunities to advance worker well-being through workplace policies, programs and practices.”
            </p>
            <a id = "news02"> </a>


            <br>
            <br>
            <br>
            <br>
            <br>


            <i>
                <h3> SHRM Survey: Some Workers Favor Required Vaccinations </h3>
                <p>
                    By Kathy Gurchiek
                    <br>
                    April 20, 2021
                </p>
            </i>

            <hr>
            <br>

            <p>
                Nearly two-thirds—62 percent—of employed Americans and those laid off or furloughed do not think the government should require people to get a COVID-19 vaccination, according to new research from the Society for Human Resource Management (SHRM).
            </p>

            <p>
                However, a slight majority of respondents do think employers should make these vaccinations a condition of employment.
            </p>

            <p>
                Until recently, the vaccine has been doled out in limited supply to certain groups of people, such as those ages 65 and older or whose underlying medical conditions put them at risk. But now that the vaccine is available to everyone over the age of 16, questions have arisen from employers and others: Does a willingness among workers to receive the vaccine vary by industry, generation or geographic region? Who has the most influence over them to receive the shot?
            </p>

            <p>
                To answer these and other questions, SHRM conducted a survey March 25-29 of 578 employed Americans—defined as workers who are currently employed or who have been laid off or furloughed since the start of the COVID-19 pandemic. All data was weighted to reflect the U.S. adult population.
            </p>

            <p>
                The majority of respondents do not support a government mandate to get the shot. However, among workers who are Black, Indigenous or people of color (BIPOC), 44 percent think the government should require everyone who can to get the vaccine; 34 percent of white workers think so, as well. Nearly half of teleworkers (49 percent) think it should be mandatory, versus 33 percent of those who do not work remotely.
            </p>

            <p>
                Men, teleworkers and those with children under the age of 18 living at home are among those most likely to choose to be vaccinated, SHRM found.
            </p>

            <img class = "img1" src = "img/news1-image.jpg">

            <p>
                As of late March, when the survey was conducted, nearly two-thirds of the workers SHRM surveyed had not been vaccinated, though 63 percent said they probably or definitely would get the shot when it became available to them. The U.S. Centers for Disease Control and Prevention (CDC) is advocating that employers appoint "vaccination ambassadors" to encourage acceptance of the COVID-19 vaccine. SHRM found, though, that friends and family—not managers or colleagues—have the most influence on those unsure about getting or unlikely to get vaccinated.
            </p>

            <p>
                When workers do opt for vaccination, the three most popular venues they would choose to go to, from a list of eight choices, were a primary care physician's office, in-network providers/a health management organization, and a hospital.
            </p>

            <h3> Employer Requirements </h3>
            <p>
                Fifty-two percent of respondents said they would support their employer requiring all employees get vaccinated as a condition of employment—a sentiment that varies by generation, ethnic identification, industry, and whether one works remotely or onsite.
            </p>

            <p>
                Millennials ages 24 to 29 and members of Generations X and Z are more likely to support vaccination as a condition of employment than Baby Boomers, Traditionalists and Millennials age 30 to 40, SHRM found.
            </p>

            <p>
                "Younger workers are more likely to support vaccination as a condition of employment than other generations. While they have been vaccinated at the lowest rate up until this point, this is likely because states are just now opening up eligibility requirements to their age group," said SHRM research Casey Sword. "Research suggests that younger workers are particularly attuned to issues regarding workplace safety and corporate social responsibility, which could explain why they would support a mandate, in addition to their political leanings."
            </p>

            <p>
                She also noted that the disproportionate impact of COVID-19 across minority communities could explain why employees of color are more likely to support vaccine mandates.
            </p>

            <p>
                Vaccination as an employment requirement also has more support among teleworkers, people in knowledge and service industries, and workers who identify as BIPOC.
            </p>

            <p>
                Now that vaccinations are more widely available, one-fourth of employed Americans who have returned to work say that knowing there are vaccinated people at their worksite influences how comfortable they feel. This is regardless of their personal vaccination status, Sword said.
            </p>

            <p>
                "Although many [U.S. workers] have already returned to work," she observed, "those who haven't are still unsure what return to work will look like. I think this is a huge indicator that when or if teleworkers return to their worksites, safety will be top of mind."
            </p>

            <p>
                But there are factors employers must consider if they require vaccination. For example, the U.S. Occupational Safety and Health Administration stipulates that employers should not distinguish between workers who are vaccinated and those who are not, and that vaccinated workers must continue to follow protective measures, such as wearing a face covering and remaining physically distant.
            </p>

            <p>
                Additionally, employers must provide reasonable accommodations to employees who decline to be vaccinated due to a disability or sincerely held religious belief, unless providing an accommodation would pose an undue hardship under Title VII of the Civil Rights Act of 1964. And employers may need to pay employees for time off to receive vaccines, particularly if they mandate inoculation. State and local sick-leave laws, as well as employer policies, may cover such time off. [SHRM members-only resource: How to Handle a Request for an Accommodation]
            </p>

            <h3> Financial Impact </h3>
            <p>
                The pandemic has caused some small businesses to reduce their staffs or close their doors. Two-thirds of Americans know of at least one small business that closed permanently since the pandemic began, and about one-third are aware of at least one small business in their community that plans to do so. Twenty percent of workers have been laid off or furloughed because of the pandemic's effect on their employer.
            </p>

            <p>
                Workers who identify as BIPOC and those with children at home have been hit especially hard, according to SHRM's research: 25 percent of BIPOC workers say they have been laid off or furloughed from a job due to COVID-19, compared with 15 percent of white workers.
            </p>

            <p>
                "There is increasing evidence that some racial and ethnic minority groups are being disproportionately affected by COVID-19," the CDC has said. Economic factors that put people from those groups at increased risk include a disproportionate number employed in essential work settings such as public transportation, health care facilities and grocery stores.
            </p>

            <p>
                Additionally, 28 percent of workers earning $30,000 to $59,999 annually have been subjected to layoffs and furloughs, making the stimulus checks a welcome dose of relief. Workers in other income brackets have seen fewer layoffs and furloughs.
            </p>

            <p>
                Money from stimulus checks was used mostly to pay for food or grocery bills, make rent or mortgage payments, or supplement savings and investments.
            </p>
            
        </div>
        
        <div class = "news_title"></div>

        <!-- include('layouts/bacci_authors') -->
        <!-- There's really something with this bacci_authors, can't fix... -->

        @include('layouts/bacci_header')
        @include('layouts/bacci_footer')
    </body>
</html>