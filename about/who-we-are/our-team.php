<?php include_once '../../header.php'; ?>

<?php

$hero_title = "Our team";

$hero_image = $root_folder .
    "assets/img/team.webp";

$hero_subtitle =
    "Supporting adults, children, families and professionals through emotionally tough times.";

include_once "../../hero.php";

?>
<div class="inner-container">
<h2 class="banner1">OUR VISION</h2>
To enable people who are experiencing bereavement, life changing illness or significant loss, to receive the highest quality of care and support to understand their grief and cope with their loss.

<h2 class="banner1">OUR MISSION</h2>
We deliver our vision by providing counselling and group support activities to anyone who is or could be affected by bereavement, life changing illness or other significant loss.

<h2 class="banner1">OUR STANDARDS</h2>
Please take a moment to watch our info video, in which Charlie O’Dell (CEO) explains the Dove Service’s Quality standards.

<h2 class="banner3">OUR TEAM</h2>

Our team is staffed of around 35 people, including our administrative team, finance officer, project workers, sessionally paid counsellors, and volunteers. As an organisation, we think investing in the development of the counselling profession is important to our team, so we take on a small number of placement counsellors every year. Each of our placement counsellors is matched with a more experienced mentor from within our counselling team.<br>
<br>
<style>
    .team-grid {
    display: grid;
    margin: 2rem 2rem;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}

.team-card {
    background: #fff;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}

.team-card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
}

div.team-credentials {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}
div.team-name-role {
    margin-left: 1.2rem;
}
div.team-name-role h4 {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
    text-transform: small-caps;
}

.role {
    font-weight: 600;
    color: #6c757d;
}

@media (max-width: 768px) {
    .team-grid {
        grid-template-columns: 1fr;
    }
}

</style>

<section class="team-grid">
    <article class="team-card">
        <div class="team-credentials">
            <div class="team-avatar">
                <img src="../../assets/img/team-charlie.webp" alt="Charlie O'Dell">
            </div>
            <div class="team-name-role">
                <h3>Charlie O'Dell</h3>
                <h4>Chief Executive Officer</h4>
            </div>
        </div>
        <div class="team-content">
        <p>Charlie joined the organisation in 2009 and has managed the development of new services across the UK.  Charlie has many years of management and counselling experience and holds a degree in Business Management & Accountancy and took over as CEO in October 2016. Charlie is also an Accredited Counsellor with the BACP and is our Designated Safeguarding Lead.</p>
    </article>

    <article class="team-card">
        <div class="team-credentials">
            <div class="team-avatar">
                <img src="../../assets/img/team-sarah-smith.webp" alt="Sarah Smith">
            </div>
            <div class="team-name-role">
                <h3>SARAH SMITH</h3>
                <h4>Clinical Manager</h4>
            </div>
        </div>
        <div class="team-content">
            <p>Sarah joined the Dove Service as a placement counsellor in 2010 and is now a BACP Accredited Counsellor, holding a diploma in Counselling. Since becoming a qualified counsellor, Sarah gained experience in counselling roles within the organisation, along with experience in an external educational setting, before joining the management team in September 2023. Supporting clinical issues and safeguarding across the organisation, Sarah is also responsible for our placement programme and children & young people’s projects.</p>
        </div>
    </article>

    <article class="team-card">
        <div class="team-credentials">      
            <div class="team-avatar">
                <img src="../../assets/img/team-sarah-knott.webp" alt="Sarah Knott">
            </div>
            <div class="team-name-role">
                <h3>SARAH KNOTT</h3>
                <h4>Operations Manager</h4>
            </div>
        </div>
        <div class="team-content">
            <p>Sarah joined the Dove Service in 2011 as Project Co-ordinator, supporting and streamlining project processes and data reporting. Joining the management team in 2018, Sarah is responsible for all aspects of operations as well as managing our Wellbeing Service contract and Employee Assistance Programmes. Sarah has many years of marketing and management experience in industry and the charitable sector, holds a degree in Marketing and ILM certificate in Leadership & Management.</p>
        </div>
    </article>
</div>

<section class="swish-top">
<?php 
$socials = 'large';
include '../../socials.php'; ?>
<?php include_once '../../footer.php'; ?>