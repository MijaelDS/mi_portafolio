<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [

            [
                'type' => 'Proyecto web',
                'title' => 'Portafolio personal',
                'image' => 'images/proyectos/arquidea.webp',
                'description' => 'Portafolio desarrollado con Laravel y Tailwind.',
                'tech' => ['Laravel', 'Tailwind', 'JavaScript', 'MySQL'],
                'demo' => ''
            ],

            [
                'type' => 'Pagina web',
                'title' => 'Shiyan',
                'image' => 'images/proyectos/shiyan.webp',
                'description' => 'Catálogo automotriz con integración a WhatsApp.',
                'tech' => ['WordPress', 'PHP', 'MySQL'],
                'demo' => 'https://shiyan.consigueventas.com/',
            ],

            [
                'type' => 'Pagina web',
                'title' => 'Sergenind',
                'image' => 'images/proyectos/sergenind.webp',
                'description' => 'Rubro de servicios de mantenimiento para edificios, condominios, centros comerciales e industrias.',
                'tech' => ['WordPress', 'PHP', 'MySQL'],
                'demo' => 'https://sergenind.consigueventas.com/',
            ],

            [
                'type' => 'Pagina web',
                'title' => 'Shandong',
                'image' => 'images/proyectos/shandong.webp',
                'description' => 'Catálogo automotriz con integración a WhatsApp.',
                'tech' => ['WordPress', 'PHP', 'MySQL'],
                'demo' => '', /* https://shandong.consigueventas.com/ */
            ],

        ];

        $skills = [

            'Frontend' => [

                [
                    'name' => 'HTML',
                    'porcentaje' => '55',
                    'icono' => 'devicon-css3-plain colored',
                ],

                [
                    'name' => 'CSS',
                    'porcentaje' => '55',
                    'icono' => 'devicon-html5-plain colored',
                ],

                [
                    'name' => 'JavaScript',
                    'porcentaje' => '20',
                    'icono' => 'devicon-javascript-plain colored',
                ],

            ],

            'Backend' => [

                [
                    'name' => 'PHP',
                    'porcentaje' => '30',
                    'icono' => 'devicon-php-plain colored',
                ],

                [
                    'name' => 'Laravel',
                    'porcentaje' => '30',
                    'icono' => 'devicon-laravel-plain colored',
                ],

                [
                    'name' => 'Java',
                    'porcentaje' => '20',
                    'icono' => 'devicon-java-plain colored',
                ],

            ],

            'Base de datos' => [

                [
                    'name' => 'MySQL',
                    'porcentaje' => '30',
                    'icono' => 'devicon-mysql-plain colored',
                ],

                [
                    'name' => 'SQLite',
                    'porcentaje' => '30',
                    'icono' => 'devicon-sqlite-plain colored',
                ],

            ],

            'Herramientas' => [

                [
                    'name' => 'GitHub',
                    'porcentaje' => '50',
                    'icono' => 'devicon-github-original',
                ],

                [
                    'name' => 'VS Code',
                    'porcentaje' => '80',
                    'icono' => 'devicon-vscode-plain colored',
                ],

                [
                    'name' => 'Wordpress',
                    'porcentaje' => '70',
                    'icono' => 'devicon-wordpress-plain ',
                ],

            ],

        ];

        return view('home', compact('projects', 'skills'));
    }

}