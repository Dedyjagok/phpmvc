# web-mvc-php

This is a simple MVC (Model-View-Controller) framework built with PHP. It demonstrates the basic structure and functionality of an MVC application.

## Project Structure

```plaintext
.vscode/
    settings.json
app/
    .htaccess
    config/
        config.php
    controllers/
        About.php
        Home.php
        Mahasiswa.php
    core/
        App.php
        Controller.php
        database.php
        Flasher.php
    init.php
    models/
        Mahasiswa_model.php
        User_model.php
    views/
        about/
        home/
        Mahasiswa/
        templates/
phpmvc.sql
public/
    .htaccess
    css/
        bootstrap-grid.css
        bootstrap-grid.css.map
        bootstrap-grid.min.css
        bootstrap-grid.min.css.map
        bootstrap-grid.rtl.css
        ...
    img/
        Subaru.png
    index.php
    js/
README.md
```

## 📂 Project Structure

### Controllers  
- **Home.php**: Handles the home page.  
- **About.php**: Handles the about page.  
- **Mahasiswa.php**: Handles the mahasiswa (students) page.  

### Models  
- **Mahasiswa_model.php**: Manages mahasiswa data.  
- **User_model.php**: Manages user data.  

### Views  
- **about/**: Contains views for the about page.  
- **home/**: Contains views for the home page.  
- **mahasiswa/**: Contains views for the mahasiswa page.  
- **templates/**: Contains common templates like header and footer.  

### Core  
- **App.php**: Initializes the application.  
- **Controller.php**: Base controller class.  
- **Database.php**: Database connection.  
- **Flasher.php**: Flash message utility.  

### Configuration  
- **config.php**: Configuration settings for the application.  

### Database  
- **phpmvc.sql**: SQL file for setting up the database.  

### Public  
- **index.php**: Entry point of the application.  
- **css/**: Contains CSS files.  
- **img/**: Contains images.  
- **js/**: Contains JavaScript files.  

---

## 🚀 Getting Started

1. **Clone the repository.**  
2. **Set up the database** using `phpmvc.sql`.  
3. **Configure the application** in `config.php`.  
4. **Run the application** on a local server.  
