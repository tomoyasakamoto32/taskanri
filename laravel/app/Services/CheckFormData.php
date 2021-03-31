<?php

namespace App\Services;

use Illuminate\Http\Request;

class CheckFormData
{
  public static function checkTaskFormat($task){
    if($task->task_format === 1){
      $task_format = 'レポート';
    }
    if($task->task_format === 2){
      $task_format = 'テスト';
    }
    if($task->task_format === 3){
      $task_format = 'プレゼンテーション';
    }
    if($task->task_format === 4){
      $task_format = '小テスト';
    }
    if($task->task_format === 5){
      $task_format = '実技';
    }

    return  $task_format;
  }
}