<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
    <style>
       
        /*--------------------------------------------------------------
        # Board member
        --------------------------------------------------------------*/

        #board-members .board-member-row {
            margin-bottom: 30px;
            /* background: gray; */
        }

        #board-members .member-photo,
        #board-members .member-info {
            padding: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        #board-members .member-photo img{
            width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    border: 10px ridge var(--color-default);
        }

        #board-members .member-info .member-name {
            font-size: 28px;
            color: var(--color-default);
            font-weight: 900;
            ;
            margin-bottom: 20px;
        }

        #board-members .member-info p {
            padding: 0;
            margin: 0;
        }

        #board-members .member-info .member-role {
            font-size: 14px;
            color: #810100;
            margin-bottom: 10px;
        }

        #board-members .member-info .member-designation {
            font-size: 14px;
            color: #858585;
            margin-bottom: 10px;
        }

        #board-members .member-info .member-bio {
            font-size: 16px;
            color: #000;
            line-height: 1.5;
            text-align: justify;
            font-weight: 300;
            ;
        }

        .hr-style-1 {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #e40000, rgba(0, 0, 0, 0));
        }
    </style>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Governance Board Members </h2>
                            <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Governance Board Members </li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->
        <section id="board-members" class="board-members">
            <div class="container">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/German-Alarcon.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Germán Andrés Alarcón Garavito</h5>
                            <p class="member-role">Global representative</p>
                            <p class="member-designation">Research fellow / University College London</p>
                            <p class="member-bio">Germán Alarcón is a Colombian nurse and global health scholar
                                interested in addressing global health challenges and in evidence-based global health
                                research focused on health inequities, health policy, mental health, and nursing care.
                                Germán previously received an MSc in Global Health & Development from University College
                                London (UCL) and achieved certification in Public Policy Analysis at the London School
                                of Economics and Political Science (LSE). He is a research fellow at UCL Department of
                                Applied Health Research and a member of the Sigma Theta Tau International Honor Society
                                of Nursing (ΣΘΤ).</p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Zahra-Zeinali.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Zahra Zeinali</h5>
                            <p class="member-role">EMR representative</p>
                            <p class="member-designation">Doctoral Student (DrGH), Department of Global Health,
                                University of Washington</p>
                            <p class="member-bio">Dr. Zahra Zeinali is a medical doctor and global health scholar from
                                Iran. She obtained her MD from the Iran University of Medical Sciences, her MPH from the
                                Johns Hopkins Bloomberg School of Public Health, and has started pursuing a Doctor of
                                Global Health Leadership and Practice degree at the University of Washington in 2022.

                                Zahra brings over seven years of global public health experience at the local, national,
                                and international levels, starting with her co-founding the Iranian Medical Students’
                                Association and leadership in the International Federation of Medical Students’
                                Associations, where she led MENA region medical student associations and represented
                                medical students in international multistakeholder events for a such as the World Health
                                Assembly. She also brings a wealth of experience working at the interface of evidence
                                and policy, particularly around health workforce planning and gender transformative
                                leadership in health systems. She has been part of multiple international research
                                initiatives, including the Rockefeller Foundation-Boston University 3-D Commission on
                                Health Determinants, Data and Decision Making, and the Global Health 50/50 research
                                initiative. She is also on the editorial board of the Journal of Health Equity and an
                                editor for PLoS Global Public Health. She has been recognized for her work as an
                                Emerging Voice for Global Health by Health Systems Global in 2020. She is now a board
                                member at the Emerging Voices for Global Health.

                                Her research focuses on creating conditions conducive to achieving health and well-being
                                for people by leveraging policy mechanisms that impact the social and structural
                                determinants of health with a strong intersectional gender lens.

                            </p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Fadima-YAYA-BOCOUM.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Fadima Inna Kamina YAYA BOCOUM</h5>
                            <p class="member-role">Francophone Africa representative</p>
                            <p class="member-designation">Researcher / Institut de Recherche en Sciences de la Santé/
                                Centre National de la Recherche Scientifique</p>
                            <p class="member-bio">Fadima is a health economist and sociologist interested in
                                generating evidences for policy and decision makers through research focused on health
                                policy and system in Africa.
                                Fadima completed a maitrise in sociology from University of Ouagadougou, MSC in health
                                economics from CESAG, and PhD in public health from University of Western Cape. She is
                                researcher at Institut de Recherche en Sciences de la Santé (IRSS) in Burkina Faso. She
                                is member of AfHEA and Women in Global Health.
                            </p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Nandini-Sarkar.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Nandini D P Sarkar</h5>
                            <p class="member-role">ITM liaison to the board</p>
                            <p class="member-designation">Post doctoral researcher, Department of Public Health,
                                Institute of Tropical Medicine, Antwerp, Belgium</p>
                            <p class="member-bio">Dr. Nandini D P Sarkar is a post-doctoral researcher in the Health
                                Systems and Equity unit at the Institute of Tropical Medicine (ITM) in Antwerp, Belgium.
                                She holds a joint doctorate degree (cum laude) from the Vrije Universiteit in Amsterdam,
                                the Netherlands and the University of Barcelona, Spain. Her doctoral thesis focused on
                                the challenge of equitable quality mental health coverage in eastern Uganda.
                                A health psychologist from India, Dr. Sarkar’s research interests focus on integrated
                                health service provision, mental health, quality of care, and human behavior as related
                                to health and illness – particularly in low- and middle-income countries. She has over a
                                decade of experience with qualitative research methodologies, and most recently is
                                working with complexity-driven Realist Evaluation methodologies.
                            </p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Tatiana-Paduraru.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Tatiana Paduarru</h5>
                            <p class="member-role">Co-chair, Treasurer, European Region Representative</p>
                            <p class="member-designation">Technical Officer, South Eastern Health Europe Network
                                (SEEHN)</p>
                            <p class="member-bio">Dr. Tatiana Paduraru, a global health leader with a background in
                                dermatology, holds a Master’s in Health Management & Law from CNAM, France, and an
                                Executive MBA with merits from the University of Sheffield. Over a decade, she has made
                                significant contributions within Moldova's Ministry of Health, establishing an ODA
                                coordination mechanism and promoting governance and transparency, earning the John Smith
                                Memorial Trust Fellowship. Dr. Paduraru has also advised the Georgian MOH on PHC
                                Strategy and health financing. Currently, she serves at the SEEHN Secretariat,
                                advocating for public health and well-being across South Eastern Europe.</p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Xin-Wang.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Xin Wang</h5>
                            <p class="member-role">Western Pacific Region representative</p>
                            <p class="member-designation">Associate Professor, School of Public Health, SUN Yat-Sen
                                University</p>
                            <p class="member-bio">Dr. Wang received her PhD in health systems and policy from Center
                                for Health Management and Policy Research in Shandong University in 2017. She received
                                joint training in China Center for Health Development Studies of Peking University
                                during June 2013-December 2014, and in Center for Health Economics and Policy Analysis
                                of McMaster University (Canada) during January 2015-January 2016.

                                Dr. Wang’s research area is health system and policy. Her studies focus on
                                people-centered integrated care for vulnerable populations (patients with chronic
                                non-communicable diseases, the elderly, pregnant women and babies), organizational
                                integration in rural health systems of low and middle-income countries.</p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-style-1">
                <div class="row board-member-row">
                    <div class="col-md-3">
                        <div class="member-photo">
                            <img class="img-fluid member-img"
                                src="assets/images/governance-board-members/Bachera-Aktar.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="member-info">
                            <h5 class="member-name">Bachera Aktar</h5>
                            <p class="member-role">Co-Chair, South-East Asia Region Representative </p>
                            <p class="member-designation">Deputy Director, BRAC James P Grant School of Public Health,
                                BRAC University, Bangladesh
                                Doctoral Student, International Public Health, Liverpool School of Tropical Medicine,
                                UK</p>
                            <p class="member-bio">Bachera Aktar is a Bangladeshi health systems researcher and academic
                                with 15+ years of experience in health systems research and community-based public
                                health interventions in urban, rural and humanitarian settings in Bangladesh. Her work
                                experience and expertise include sexual and reproductive health, maternal and child
                                health and nutrition, urban health systems and health services in humanitarian settings,
                                mixed-method research, community-based participatory research approaches, participatory
                                action research, implementation research, community-centric health interventions,
                                gender, power and intersectional analysis, and social-political determinants of health.
                                In addition to her current research and administrative roles at BRAC James P Grant
                                School of Public Health, BRAC University, she is also a Faculty member, MPH course
                                coordinator and thesis supervisor. Prior to joining BRAC University, she worked for BRAC
                                (the largest southern-led NGO) Health Program for eight years and managed its largest
                                maternal, newborn and child health program in rural Bangladesh. Bachera is an EV alumnus
                                from the 2022 cohort. </p>
                            <div class="member-link">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'partials/scripts.php'; ?>
    
</body>

</html>
