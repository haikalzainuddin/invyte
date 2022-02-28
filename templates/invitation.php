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
        <div class="invitation-popup invitation-rsvp" data-popup="rsvp">
            <span class="popup-close">
            <i class="fa fa-3x fa-times"></i>
            </span>
            <h3>RSVP</h3>
            <?php echo do_shortcode('[contact-form-7 id="17" title="RSVP Form"]'); ?>
        </div>
        <div class="invitation-popup invitation-calendar" data-popup="calendar">
            <span class="popup-close">
            <i class="fa fa-3x fa-times"></i>
            </span>
            <h3>Calendar</h3>
        </div>
        <div class="invitation-popup invitation-contact" data-popup="contact">
            <span class="popup-close">
            <i class="fa fa-3x fa-times"></i>
            </span>
            <h3>Contact</h3>
        </div>
        <div class="invitation-popup invitation-location" data-popup="location">
            <span class="popup-close">
            <i class="fa fa-3x fa-times"></i>
            </span>
            <h3>Location</h3>
        </div>
        <div class="invitation-popup invitation-sop" data-popup="sop">
            <span class="popup-close">
            <i class="fa fa-3x fa-times"></i>
            </span>
            <h3>SOP</h3>
        </div>
    </div>
</div>

<?php
get_footer();