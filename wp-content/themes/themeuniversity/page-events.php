<?php
// Đây là trang sự kiện cho theme WordPress 'themeuniversity'

get_header();  // Đưa header của theme vào trang

?>
<div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Welcome to Programs</h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
  </div>
<div class="events-page">
    <header class="events-header">
        <h1 class="page-title">UNIVERSITY Events</h1>
        <p class="subheading">Featured and Upcoming Events</p>
    </header>

    <nav class="events-nav">
        <ul>
            <li><a href="#">All Events</a></li>
            <li><a href="#">Conferences</a></li>
            <li><a href="#">Workshops</a></li>
            <li><a href="#">Lectures</a></li>
        </ul>
    </nav>

    <section class="upcoming-events">
        <h2>Upcoming Events</h2>
        <!-- Dynamic events list here, potentially loaded from a custom post type or database -->
        <article class="event">
            <div class="event-image">
                <img src="https://www.trumba.com/i/DgBPCcBaIdgZREiJVVW8VidJ.jpg" alt="Event Thumbnail">
            </div>
            <div class="event-details">
                <h3 class="event-title">Climate Justice and Mass Incarceration</h3>
                <p class="event-date">June 15, 2024</p>
                <p class="event-time">12:00 PM - 2:00 PM</p>
                <p class="event-location">Location: Virtual</p>
                <a href="#" class="event-link">More Details</a>
            </div>
        </article>
        <article class="event">
            <div class="event-image">
                <img src="https://www.trumba.com/i/DgAbhOdxkTNIAxr4m4EeIdiH.jpg" alt="Event Thumbnail">
            </div>
            <div class="event-details">
                <h3 class="event-title">Climate Justice and Mass Incarceration</h3>
                <p class="event-date">June 15, 2024</p>
                <p class="event-time">12:00 PM - 2:00 PM</p>
                <p class="event-location">Location: Virtual</p>
                <a href="#" class="event-link">More Details</a>
            </div>
        </article>
        <article class="event">
            <div class="event-image">
                <img src="https://www.trumba.com/i/DgBPCcBaIdgZREiJVVW8VidJ.jpg" alt="Event Thumbnail">
            </div>
            <div class="event-details">
                <h3 class="event-title">Climate Justice and Mass Incarceration</h3>
                <p class="event-date">June 15, 2024</p>
                <p class="event-time">12:00 PM - 2:00 PM</p>
                <p class="event-location">Location: Virtual</p>
                <a href="#" class="event-link">More Details</a>
            </div>
        </article>
        <article class="event">
            <div class="event-image">
                <img src="https://www.trumba.com/i/DgBPCcBaIdgZREiJVVW8VidJ.jpg" alt="Event Thumbnail">
            </div>
            <div class="event-details">
                <h3 class="event-title">Climate Justice and Mass Incarceration</h3>
                <p class="event-date">June 15, 2024</p>
                <p class="event-time">12:00 PM - 2:00 PM</p>
                <p class="event-location">Location: Virtual</p>
                <a href="#" class="event-link">More Details</a>
            </div>
        </article>
    </section>

    <section class="submit-event">
        <h2>Submit Your Event</h2>
        <p>Do you have an event you'd like to promote? Submit it here!</p>
        <a href="#" class="btn submit-btn">Submit Event</a>
    </section>
</div>

<?php
get_footer();  // Đưa footer của theme vào trang
?>
