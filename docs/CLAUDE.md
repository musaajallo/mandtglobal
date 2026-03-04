# CLAUDE.md - M&T Global Construction Group (mandtglobal)

## Goal

Converting a static HTML website for **M&T Global Construction Group** (a construction company in The Gambia) into a Laravel Filament application.

### Project Steps
1. Setting up the Laravel project (done)
2. Analyzing all frontend HTML pages to understand the site structure (done)
3. Creating an execution plan for each page in `docs/plans/` (not yet done)
4. Creating a TODO tracking document in `docs/` (not yet done)
5. Implementing the full application (not yet started)

---

## Instructions

- The project was copied from `laravel-filament-starter` to `mandtglobal` with all config names updated
- Database name is `mandtglobal_db`
- **Do NOT initialize git repos** -- the user handles that manually
- Admin login credentials: `admin@mandtglobal.com` / `password` (seeded via `AdminSeeder`)
- The execution plan should be created in `docs/plans/` with a plan for each page
- A TODO tracking document should be created in `docs/` to keep track of progress and tick off when done
- The frontend HTML files are in `docs/frontend/` and serve as the reference for what needs to be built

---

## Discoveries

### Project Setup Issues Resolved
- **Redirect loop on login**: The root cause was a missing Dashboard page -- `app/Filament/Admin/Pages/` was empty, so after login Filament's `RedirectToHomeController` had nowhere to send the user. Fixed by creating `Dashboard.php` extending `Filament\Pages\Dashboard`
- `AuthenticateSession` middleware was temporarily removed during debugging but **was restored** per user's instruction

### Site Architecture (from HTML analysis)
- **CSS Framework**: Custom CSS with Bootstrap grid, Slick carousel, jQuery
- **Fonts**: Rubik + Roboto from Google Fonts, FontAwesome 6 icons
- **Shared layout**: All pages share identical header (topbar + navbar) and footer (4-column: About, Services, Company, Quick Connect)

### Navigation Structure
- **Home** (index.html)
- **Company** dropdown: About Us, Team, Vision, Pricing & Plans
- **Services** (listing page + 13 individual service pages)
- **Depts** dropdown: Real Estate, Kitchens, Retail & Rental, Manufacturing, Sales Force, Logistics, IT & Innovation, Training Academy (8 dept pages)
- **Projects** (listing + single project page)
- **More** dropdown: Blog, News & Media, Events, Careers, Partnerships, Investments, Gallery, FAQs, Downloads
- **Contact Us**

### Dynamic Data Entities Identified (16 total)

| Entity | Key Fields |
|---|---|
| **BlogPost** | title, slug, image, date, author, categories, excerpt, body, tags |
| **JobListing** | title, location, type, deadline, description, TOR file (PDF) |
| **Download** | title, description, file (PDF) |
| **Event** | title, description, date, time, location, detail_link |
| **FAQ** | question, answer, sort_order |
| **GalleryImage** | image, alt_text, sort_order |
| **MediaItem** | youtube_url, title, description |
| **Service** | name, slug, icon, hero_image, overview, process, deliverables, how_it_works |
| **Department** | name, slug, banner_image, overview, process, deliverables, how_it_works |
| **Project** | title, slug, categories, description, gallery_images, slider_images, overview, challenge, solution_results, client, location, services, tags |
| **PricingCategory** | title, subtitle |
| **PricingPlan** | name, description, features_list, price, period, style, category_fk |
| **InvestmentArea** | icon, title, description, link |
| **PartnershipArea** | icon, title, description, link |
| **VisionItem** | icon, title, description, link, section (current/future) |
| **TeamMember** | name, position, image, sort_order |
| **SiteSettings** (global) | phone numbers, email, address, social links, office hours, logo, about_text |

### Key Patterns
- **13 Services**: Consultation, Advisory, Project Management, Architecture, Take-Off, Construction, Remodeling, Inspection, Maintenance, Real Estate, Interior Design, Borehole Drilling, Solar Installation
- **8 Departments**: Real Estate, Kitchens, Tools/Equipment/Materials, Manufacturing, Sales Force, Logistics, IT & Innovation, Training Academy
- **Pricing**: 3 categories x 3 tiers each (Basic, Standard, Advanced)
- **Gallery**: 60+ images
- **Contact form fields**: Full Name, Email, Phone, Subject, Message
- **Home page sections**: hero slider (7 slides), features section, about section, services carousel, key highlights, counters, project stages, portfolio carousel, blog posts, clients/partners carousel

### Team Members (from team.html)
23 members listed with names and positions (CEO, GM, Business Dev Manager, Project Managers, Architects, Quantity Surveyors, Site Supervisors, Admin/Finance, etc.)

---

## Accomplished

### Completed
- Copied `laravel-filament-starter` -> `mandtglobal` with all config updated
- Updated `.env`, `.env.example`, `composer.json`, `package-lock.json`, `welcome.blade.php`
- DB name set to `mandtglobal_db`
- Created `AdminSeeder` with admin@mandtglobal.com / password
- Fixed redirect loop by creating `app/Filament/Admin/Pages/Dashboard.php`
- Restored `AuthenticateSession` middleware
- Fully analyzed all frontend HTML pages -- identified all data entities, forms, navigation, and page structures

### Not Yet Done
- Create execution plan documents in `docs/plans/` (one per page/section)
- Create TODO tracking document in `docs/`
- Create database models, migrations, and seeders for all entities
- Create Filament admin resources for all entities
- Build frontend Blade templates (layout, partials, pages)
- Integrate frontend CSS/JS assets
- Set up routes for public-facing pages
- Implement contact form with email functionality

---

## Relevant Files & Directories

### Project Root
- `/home/musaajallo/software_development/projects/web_apps/mandtglobal/` -- main project directory

### Config Files (modified)
- `mandtglobal/.env` -- APP_NAME="MandT Global", DB_DATABASE=mandtglobal_db
- `mandtglobal/.env.example` -- same updates
- `mandtglobal/composer.json` -- name: mandtglobal/mandtglobal
- `mandtglobal/package-lock.json` -- name: mandtglobal
- `mandtglobal/resources/views/welcome.blade.php` -- fallback name updated

### Application Files (created/modified)
- `mandtglobal/database/seeders/AdminSeeder.php` -- creates admin user
- `mandtglobal/database/seeders/DatabaseSeeder.php` -- calls AdminSeeder
- `mandtglobal/app/Filament/Admin/Pages/Dashboard.php` -- extends Filament BaseDashboard
- `mandtglobal/app/Providers/Filament/AdminPanelProvider.php` -- AuthenticateSession restored at line 50
- `mandtglobal/app/Models/User.php` -- standard User with HasRoles, HasApiTokens

### Frontend Reference Files (read-only, to be converted)
- `mandtglobal/docs/frontend/` -- all HTML files for the static website
- `mandtglobal/docs/frontend/index.html` -- home page
- `mandtglobal/docs/frontend/about-us.html`, `team.html`, `vision.html`, `pricing-plans.html` -- company pages
- `mandtglobal/docs/frontend/services.html` -- services listing
- `mandtglobal/docs/frontend/services/` -- 13 individual service pages (consultation, advisory, architecture, etc.)
- `mandtglobal/docs/frontend/depts/` -- 8 department pages
- `mandtglobal/docs/frontend/projects.html` -- projects listing
- `mandtglobal/docs/frontend/projects/projects-single-project.html` -- single project template
- `mandtglobal/docs/frontend/blog.html` -- blog listing
- `mandtglobal/docs/frontend/posts/` -- blog post detail pages
- `mandtglobal/docs/frontend/contacs.html` -- contact page with form + Google Map
- `mandtglobal/docs/frontend/careers.html`, `downloads.html`, `events.html`, `faqs.html`, `gallery.html`, `investments.html`, `media.html`, `partnerships.html` -- additional pages
- `mandtglobal/docs/frontend/assets/` -- CSS, JS, images, fonts

### Other Docs Directories
- `mandtglobal/docs/plans/` -- execution plans (exists but empty, not yet created)
- `mandtglobal/docs/frontend-docs/` -- contains index.html and assets (frontend documentation reference)
- `mandtglobal/docs/coming-soon/` -- coming-soon page files (WordPress-based, includes assets, index.html, Website Files/)
