pipelina{
    agent any

    tools {

    }

    parameters {
        string(name: 'container_name', defaultValue: 'pagina_web', description: 'Nombre del contenedor de docker.' )
        string(name: 'image_name', defaultValue: 'pagina_img', description: 'Nombre de la imagen docker.')
        string(name: 'tag_image', defaultValue: 'lts', description: 'Tag de la imagen de la página.')
        string(name: 'container_port', defaultValue: 80, description: 'Puerto que usa el contenedor') 
    }

    stages {
        stages('install') {
            git 'https://github.com/DJulieth19/EasyBill.git'
            dir('') {
               sh 'npm install' 
            }
        }
    }
}