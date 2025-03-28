Portfolio Project Directory Structure
├── index.html                (Main landing page showcasing portfolio and personal details)
├── starter-page.html         (Template for creating new pages)
├── service-details.html      (Details about specific services offered)
├── portfolio-details.html    (Details about specific portfolio projects)
├── assets/
│   ├── css/
│   │   └── main.css          (Custom styles for the entire site)
│   ├── js/
│   │   └── main.js           (Main JavaScript file for interactivity and animations)
│   ├── img/                  (Images used across the site)
│   ├── vendor/               (Third-party libraries like Bootstrap, AOS, etc.)
│       ├── bootstrap/        (Bootstrap CSS and JS files)
│       ├── aos/              (AOS animation library)
│       ├── glightbox/        (Lightbox library for image previews)
│       ├── swiper/           (Swiper library for carousels)
│       ├── isotope-layout/   (Isotope library for filtering and sorting)
│       ├── purecounter/      (PureCounter library for animated counters)
│       └── typed.js/         (Typed.js library for typing animations)
└── forms/
    └── contact.php           (PHP script for handling contact form submissions)

File Relationships & Flow
1. **index.html**: The main page of the portfolio. It includes sections like Hero, About, Resume, Portfolio, Services, and Contact.
   - Uses `main.css` for styling and `main.js` for interactivity.
   - Includes animations via AOS and interactive elements like dropdowns and counters.

2. **starter-page.html**: A template for creating new pages. It includes a basic structure with a header, footer, and a placeholder section.

3. **service-details.html**: Provides detailed information about individual services. Linked from the Services section in `index.html`.

4. **portfolio-details.html**: Displays detailed information about specific portfolio projects. Linked from the Portfolio section in `index.html`.

5. **assets/css/main.css**: Contains all custom styles for the site, including layout, typography, and component-specific styles.

6. **assets/js/main.js**: Handles interactivity, animations, and library initializations (e.g., AOS, Swiper, Typed.js).

7. **assets/vendor/**: Contains third-party libraries used for styling, animations, and interactivity.

8. **forms/contact.php**: Processes the contact form submissions from the Contact section in `index.html`.

User Journey:
1. Visitors land on `index.html` and navigate through sections like About, Resume, Portfolio, and Services.
2. Clicking on a service or portfolio item redirects to `service-details.html` or `portfolio-details.html` for more information.
3. The Contact section allows users to send messages via the form, processed by `forms/contact.php`.

Development Notes:
- Use `starter-page.html` as a base for creating new pages.
- Ensure all new styles are added to `main.css` and interactivity to `main.js`.
- Follow the existing structure and naming conventions for consistency.
