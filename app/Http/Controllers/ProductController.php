<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Rengginang',
                'description' => 'Rengginang renyah khas tradisional.',
                'price' => 15000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Rengginang'
            ],
            [
                'name' => 'Risol Mayo',
                'description' => 'Risol isi mayo, enak dan gurih.',
                'price' => 12000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Risol+Mayo'
            ],
            [
                'name' => 'Sendal Jepit',
                'description' => 'Sendal jepit nyaman untuk sehari-hari.',
                'price' => 20000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Sendal+Jepit'
            ],
            [
                'name' => 'Sendal Anak-anak',
                'description' => 'Sendal lucu untuk anak-anak.',
                'price' => 18000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Sendal+Anak'
            ],
            [
                'name' => 'Sendal Bayi',
                'description' => 'Sendal empuk untuk bayi.',
                'price' => 25000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Sendal+Bayi'
            ],
            [
                'name' => 'Sari Kedelai',
                'description' => 'Minuman sehat sari kedelai segar.',
                'price' => 10000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Sari+Kedelai'
            ],
            [
                'name' => 'Baju Muslim',
                'description' => 'Baju muslim elegan dan nyaman.',
                'price' => 120000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Baju+Muslim'
            ],
            [
                'name' => 'Keripik Kelor',
                'description' => 'Keripik kecipir daun kelor gurih.',
                'price' => 15000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Keripik+Kelor'
            ],
            [
                'name' => 'Salad Buah',
                'description' => 'Salad buah segar dengan yogurt.',
                'price' => 25000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Salad+Buah'
            ],
            [
                'name' => 'Tahu Bakso',
                'description' => 'Tahu isi bakso nikmat.',
                'price' => 17000,
                'image' => 'https://via.placeholder.com/300x200.png?text=Tahu+Bakso'
            ],
        ];

        return view('product', compact('products'));
    }
}
