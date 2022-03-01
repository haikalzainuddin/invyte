<?php 

/* Template Name: Invitation Page */ 

?>

<?php
    get_header();
?>

<div class="invitation-page">
    <div class="invitation-page-wrapper">
        <div class="invitation-content">
            <?php include get_template_directory() . '/modules/invitation-main.php'; ?>
            <?php include get_template_directory() . '/modules/invitation-intro.php'; ?>
            <?php include get_template_directory() . '/modules/invitation-foe.php'; ?>
        </div>
        <div class="invitation-footer">
            <div class="inivitation-footer-wrapper invitation-btns">
                <a href="#" data-trigger="rsvp">
                    <i class="fa fa-3x fa-user"></i>
                    <span>RSVP</span>
                </a>
                <a href="#" data-trigger="calendar">
                    <i class="fa fa-3x fa-calendar"></i>
                    <span>Calendar</span>
                </a>
                <a href="#" data-trigger="contact">
                    <i class="fa fa-3x fa-phone"></i>
                    <span>Contact</span>
                </a>
                <a href="#" data-trigger="location">
                    <i class="fa fa-3x fa-map-marker"></i>
                    <span>Location</span>
                </a>
                <a href="#" data-trigger="sop">
                    <i class="fa fa-3x fa-exclamation"></i>
                    <span>SOP</span>
                </a>
            </div>
        </div>
        <?php include get_template_directory() . '/modules/invitation-tab-rsvp.php'; ?>
        <?php include get_template_directory() . '/modules/invitation-tab-calendar.php'; ?>
        <?php include get_template_directory() . '/modules/invitation-tab-contact.php'; ?>
        <?php include get_template_directory() . '/modules/invitation-tab-location.php'; ?>
        <?php include get_template_directory() . '/modules/invitation-tab-sop.php'; ?>
    </div>
</div>

<?php
get_footer();