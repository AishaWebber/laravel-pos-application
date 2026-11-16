<x-mail::message>
# Task Completed

A task has been marked as done.

**Task:** {{ $task->title }}

**Date:** {{ $task->task_date->format('F d, Y') }}

**Status:** {{ ucfirst($task->status) }}

Thank you,<br>
{{ config('app.name') }}
</x-mail::message>