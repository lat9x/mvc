<?php

namespace MVC\Models;

use MVC\Models\SinhvienResourceModel;
use MVC\Models\SinhvienModel;

class SinhvienRepository
{
    
    public function add(SinhvienModel $model)
    {
        $sinhvienResourceModel = new SinhvienResourceModel;
        return $sinhvienResourceModel->save($model);
    }
    public function get(int $id)
    {
        $sinhvienResourceModel = new SinhvienResourceModel;
        return $sinhvienResourceModel->get($id);
    }
    public function delete(int $id)
    {
        $sinhvienResourceModel = new SinhvienResourceModel;
        return $sinhvienResourceModel->delete($id);
    }
    public function getAll()
    {
        $sinhvienResourceModel = new SinhvienResourceModel;
        return $sinhvienResourceModel->getAll();
    }
}

?>