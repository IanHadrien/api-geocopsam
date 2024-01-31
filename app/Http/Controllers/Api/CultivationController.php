<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CultivationRepository;
use Illuminate\Http\Request;

class CultivationController extends Controller
{
    private $cultivationRepository;

    public function __construct(CultivationRepository $repository) {
        $this->cultivationRepository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultivations = $this->cultivationRepository->all();
        return $cultivations;
    }
}
