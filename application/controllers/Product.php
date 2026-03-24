<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function view($slug = null)
    { 

        $products = [

            'tower-parking-system' => [
                'name' => 'Tower Parking System',
                'image' => 'assets/img/home-1/project/tower.png',
                'description' => 'Suitable for all passenger cars. Tower parking is a fully automated parking system where a separate tower/Building is constructed only for parking space that can accommodate car range from 20 cars.',
                'suitablefor' => 'All passenger cars',
                'function' => 'Fully automated',
                'structure' => 'Separate tower/building is constructed only for parking space',
                'safety_modification' => 'No human may enter this parking lot, it is much safer. 180 degrees rotation is possible by incorporating rotary mechanism at the bottom to drive the car directly forward.',
                'recommendedfor' => 'Big Societies, Government / corporate offices , Club house, GYM, Banquet halls',
                'operations' => 'The system mainly comprises of vertical columns A lift for vertical movement of vehicles and pallets for horizontal movement. The car usually enters the building/parking space through the entrance room and is then raised into parking space through the main lift and then moved into empty space using pallet movement. This is a hassle free solution for parking space without driving through the drive ways and finding the parking space.'
            ],

            'stack-parking-system' => [
                'name' => 'Stack Parking System',
                'image' => 'assets/img/home-1/project/stack.png',
                'description' => 'Very easy to handle, dependent parking system. Installs in basement & open space. Vallet parking modules and customisations as per possible dimensions.',
                'suitablefor' => 'All passenger cars,',
                'function' => 'Fully/partially automated manual cost effective',
                'structure' => 'Stack, Pallets one above other depend on requirement and design.',
                'safety_modification' => 'Galaxy stack product description.',
                'accomodate' => '2 cars each',
                'recommendedfor' => 'Small Societies, small offices, Club house, GYM, Banquet halls',
                'operations' => 'The pallet rests on ground floor and the car is parked on it. If a second car has to be parked, the pallet is raised to stroke height above the ground and the second car is parked directly on the ground itself. The car can directly be removed from the ground floor. In order to remove the car from its raised position, the pallet is lowered to the ground and the car is just driven off. But in case if a car is parked on the ground below the pallet, firstly the car on the ground floor must be removed and then the pallet can be lowered so that the car parked on pallet can be removed.'
            ],

            'hydraulic-puzzle-parking-system' => [
                'name' => 'Hydraulic Puzzle Parking System',
                'image' => 'assets/img/home-1/project/hydraulic.png',
                'description' => 'Only One parking space at ground level is kept empty. Five two twenty five cars parking range. Pit +Ground +1 level possible.',
                'suitablefor' => 'All passenger cars,',
                'function' => 'Fully automated',  
                'structure' => 'Puzzle',
                'accomodate' => 'Ranging from 5 to 23 cars',
                'safety_modification' => 'Safe & Independent system. It can be customized to accommodate cars of different heights at different levels.',
                'recommendedfor' => 'Government / Corporate offices , Mall, Public Parking',
                'operations' => 'The system comprises of top and pit pallets that move only in vertical direction, and ground level pallets that move only in horizontal direction by means of hydraulic system (One parking space at ground level is kept empty). The car is parked on ground level pallet and then it is moved to top or pit level depending on space available. The cars parked on ground level pallets can directly be removed by just driving off. In order to remove the car from its top or pit level, the ground level pallets are moved aside in horizontal direction using mechanical motor attached to the pallets and then the required pallet is lowered or raised to ground level and the car is driven off.'
            ],

            'mechanical-puzzle-parking-system' => [
                'name' => 'Mechanical Puzzle Parking System',
                'image' => 'assets/img/home-1/project/machnnical.png',
                'description' => 'Independent parking system. Easy to maintain, customised module as per requirements. Use less space for more parking.',
                'suitablefor' => 'All passenger cars,',
                'function' => 'Fully automated',  
                'structure' => 'Puzzle',
                'accomodate' => 'Ranging from 5 to 50 cars.',
                'safety_modification' => 'Safe & Independent system. It can be customized to accommodate cars of different heights at different levels.',
                'recommendedfor' => 'Government / Corporate offices , Mall, Public Parking',
                'operations' => 'The system comprises of top pallets that move only in vertical direction, ground level pallets that move only in horizontal direction and intermediate pallets that move both in horizontal and vertical direction by mechanical system (One column is remains empty).Normally the car is parked on ground level pallet and then it is moved to higher levels depending on space available. The cars parked on ground level pallets can directly be removed by just driving off. In order to remove the car from its raised position, the lower pallets are moved aside in horizontal direction using mechanical motor attached to the pallets and then the required pallet is lowered to ground level and the car is driven off'
            ]

        ];

        if (!array_key_exists($slug, $products)) {
            show_404();
        }

        $data['product'] = $products[$slug];

        $this->load->view('web/header');
        $this->load->view('product_page', $data);
        $this->load->view('web/footer');
    }
}
