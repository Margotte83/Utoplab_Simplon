# symfony-mignons-blog

## As part of a group exercise, I developed a blog with the Symfony framework.
## I notably participated in:

Installation, to create and configure the project, using Composer for the management of
Dependencies.

 Creation of pages, from the MVC model, which allows to separate the different concepts resulting from PHP pages: database queries (Model), display HTML pages (View) and data processing (Controller).
 
The establishment of a system of routes which are used to form URLs.

The creation of controllers that process all the "static" pages of the blog, like the home page. Indeed, a controller can manage a multitude of "pages" which correspond to roads.

Navigation between pages: create simple links to display the page thatcalled and configurable links. These are roads that contain these settings. The route provides access to an article. It expects a parameter which is the "Slug" of the article. The "slug" as a parameter in the "path". This will automatically create the link, respecting the form specified in the annotation.

The use of Bootstrap for views and responsive.

In particular Bootsnipp, for the navbar and other visual elements of the pages.