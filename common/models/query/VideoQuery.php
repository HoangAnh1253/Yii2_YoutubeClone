<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\video]].
 *
 * @see \common\models\video
 */
class videoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\video[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\video|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
