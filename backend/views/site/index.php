<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Modal;

$this->title = 'My Yii Application';

?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <table class="table-video">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>ФИО</td>
                        <td>Видео с веб-камеры</td>
                        <td>Демонстрация экрана</td>
                        <td>Дата</td>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($rows as $row):?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['full_name']?></td>
                            <td>
                                <?Modal::begin([
                                    'title' => '<div class="title-modal">Видео с веб-камеры</div>',
                                    'size' => 'modal-xl',
                                    'toggleButton' => [
                                        'label' => '<svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 1024 1024"><path fill="#000000" d="M512 160c320 0 512 352 512 352S832 864 512 864 0 512 0 512s192-352 512-352zm0 64c-225.28 0-384.128 208.064-436.8 288 52.608 79.872 211.456 288 436.8 288 225.28 0 384.128-208.064 436.8-288-52.608-79.872-211.456-288-436.8-288zm0 64a224 224 0 1 1 0 448 224 224 0 0 1 0-448zm0 64a160.192 160.192 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160-71.744-160-160-160z"/></svg>',
                                        'tag' => 'button',
                                        'class' => 'btn btn-click-video-modal',
                                    ],
                                ]);?>
                                    <video src="/frontend/web/record/video/<?=$row['web_camera_video']?>" controls ></video>
                                <?Modal::end();?></td>
                            <td>
                                <?Modal::begin([
                                    'title' => '<div class="title-modal">Демонстрация экрана</div>',
                                    'size' => 'modal-xl',
                                    'toggleButton' => [
                                        'label' => '<svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 1024 1024"><path fill="#000000" d="M512 160c320 0 512 352 512 352S832 864 512 864 0 512 0 512s192-352 512-352zm0 64c-225.28 0-384.128 208.064-436.8 288 52.608 79.872 211.456 288 436.8 288 225.28 0 384.128-208.064 436.8-288-52.608-79.872-211.456-288-436.8-288zm0 64a224 224 0 1 1 0 448 224 224 0 0 1 0-448zm0 64a160.192 160.192 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160-71.744-160-160-160z"/></svg>',
                                        'tag' => 'button',
                                        'class' => 'btn btn-click-video-modal',
                                    ],
                                ]);?>
                                    <video src="/frontend/web/record/video/<?=$row['capture_screen_video']?>" controls ></video>
                                <?Modal::end();?>
                            </td>
                            <td><?=$row['date']?></td>
                        </tr>
                    <?endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
