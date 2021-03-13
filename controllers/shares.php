<?php

class Shares extends Controller
{
    protected function Index()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }

    public function add()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);

    }
}
 