<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@imageDC', 'http://localhost/yii2/backend/web/image/document');
Yii::setAlias('@imagePT', 'http://localhost/yii2/backend/web/image/picture');
Yii::setAlias('@imageDT', 'http://localhost/yii2/backend/web/image/detail');