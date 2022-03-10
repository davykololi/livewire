<?php

namespace App\Http\Livewire\Editor;

use Livewire\Component;

class EditorDashboard extends Component
{
    public function render()
    {
        return view('livewire.editor.editor-dashboard')->extends('layouts.editor')->section('content');
    }
}
