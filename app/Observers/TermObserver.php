<?php

namespace App\Observers;

use App\Jobs\ActivitesNewTerms;
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