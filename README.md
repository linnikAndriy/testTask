The project was done on a local Open server. In order to deploy the project, you need to copy all the files and export the database.
WP admin:
admin
12345

Webpack 5 was used for the front part.

To start making or changing styles or scripts, you need to install the node modules package. To do this, in the theme folder, you need to launch the terminal and execute the "npm install" command.

The project uses the SCSS style preprocessor. The entry point for styles is in the scr/scss/main.scss folder. The entry point for scripts is src/js/main.js. To change styles or scripts, you need to run the terminal in the theme folder, execute the "npm run watch" command and make changes in the corresponding files or create new ones and export them to the appropriate entry points.

During the final assembly of the project, execute the "npm run build" command in the console (in the theme folder) to minimize styles and scripts
