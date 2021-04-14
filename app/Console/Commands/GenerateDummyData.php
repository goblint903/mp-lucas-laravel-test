<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateDummyData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate 10 dummy data by running this script.';
    private $db;

    /**
     * Dummy data
     */
    private $dummy_data;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = \App::make('App\Services\DbService');
        $this->dummy_data  = [
            [
                "MakeId" => 440,
                "MakeName" => "ASTON MARTIN",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 441,
                "MakeName" => "TESLA",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 442,
                "MakeName" => "JAGUAR",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 443,
                "MakeName" => "MASERATI",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 445,
                "MakeName" => "ROLLS ROYCE",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 448,
                "MakeName" => "TOYOTA",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 449,
                "MakeName" => "MERCEDES-BENZ",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 452,
                "MakeName" => "BMW",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 454,
                "MakeName" => "BUGATTI",
                "VehicleTypeId" => 2,
            ],
            [
                "MakeId" => 456,
                "MakeName" => "MINI",
                "VehicleTypeId" => 2,
            ]
        ];
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->db->insert('motors', $this->dummy_data);
        return $id;
    }
}
