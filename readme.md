#Whereistheotherside 🌎

##A simple website made to tell you where is the exact opposite side of the world relative from where you access it.

###This is a portfilio project, featuring the use of the following technologies:
- PHP: Present in the index.php file and in the API folder, which provides a simple JSON-serving RESTful API suiting the website needs.
- Javascript: Present in the files scripts.js and animations.js in src/js. I have used Bootstrap because of its stylesheets, since style and design were not my biggest concerns in this specific application. This project includes jQuery simply because Bootstrap still requires it by now (30/10/2020), but I tried to avoid using it.
- CSS: Present in assets/css, in the files animations.css and custom.css.

###How can I run it?
You may access the production version on http://wherestheotherside.000webhostapp.com/
To run this application locally, you will need an Apache PHP server, such as the one provided by XAMPP, and an OpenCage geolocation API key is also required, and must be specified in src/php/config/config.php as the OPENCAGE_API_TOKEN constant.
