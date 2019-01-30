<?php

//简单工厂模式
interface Vehicle
{
    public function drive();
}

class Car implements Vehicle
{
    public function drive()
    {
        // TODO: Implement drive() method.
        echo "汽车四轮驱动";
    }
}


class Ship implements Vehicle
{
    public function drive()
    {
        // TODO: Implement drive() method.
        echo "轮船螺旋桨驱动";
    }
}

class Aircraft implements Vehicle
{
    public function drive()
    {
        // TODO: Implement drive() method.
        echo "飞机靠螺旋桨和机翼飞行";
    }
}

//再创建一个工厂类,专门用作类的创建
class VehicleFactory
{
    public static function build($className = null)
    {
        $className = ucfirst($className); //把首字母变成大写返回
        if ($className && class_exists($className)) {
            return new $className;
        }
        return null;
    }
}

//工厂类用了一个个静态方法来创建其他类,在客户端中可以这样使用
VehicleFactory::build('car')->drive();
VehicleFactory::build('ship')->drive();
