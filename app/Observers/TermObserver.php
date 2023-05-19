<?php

namespace App\Observers;

use App\Jobs\ActivitesNewTerms;
use App\Jobs\ChangeIsDone;
use App\Models\Term;
use Illuminate\Support\Facades\Bus;

class TermObserver
{
    /**
     * Handle the Term "created" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function creating(Term $term)
    {
    }
    /**
     * Handle the Term "created" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function created(Term $term)
    {
        function timeToSeconds(string $time): int
        {
            $arr = explode(':', $time);

            return $arr[0] * 3600 + $arr[1] * 60;
        }
        $time = strtotime($term->date_visit) + timeToSeconds($term->end_visit);

        ChangeIsDone::dispatch($term)->delay($time - time());
        ActivitesNewTerms::dispatch($term)->delay(now()->addDay());
    }

    /**
     * Handle the Term "updated" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function updated(Term $term)
    {
        //
    }

    /**
     * Handle the Term "deleted" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function deleted(Term $term)
    {
        //
    }

    /**
     * Handle the Term "restored" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function restored(Term $term)
    {
        //
    }

    /**
     * Handle the Term "force deleted" event.
     *
     * @param  \App\Models\Term  $term
     * @return void
     */
    public function forceDeleted(Term $term)
    {
        //
    }
}
