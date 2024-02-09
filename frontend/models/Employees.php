<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Employees extends ActiveRecord {
    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'phone' => 'Телефон',
            'post' => 'Должность',
            'status' => 'Статус',
            'salary' => 'Заработная плата'
        ];
    }
    public function rules(){
        return [
            [['name', 'surname', 'phone', 'post', 'status'], 'string'],
            [['salary'], 'integer'],
        ];
    }

    public function calcSalary() {
        if ($this -> salary < 10000) {
            return $this -> salary * 0.10;
        } 
        elseif ($this -> salary >= 10000 && $this -> salary <= 25000 ) {
            return $this -> salary * 0.15;
        } 
        else {
            return $this -> salary * 0.25;
        }
    }
}
