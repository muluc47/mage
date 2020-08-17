<?php

namespace App\Http\Controllers;

use App\Steps\SalesOperation\DealerStep;
use App\Steps\SalesOperation\DocumentStep;
use App\Steps\SalesOperation\GuaranteeStep;
use App\Steps\SalesOperation\IntelligentStep;
use App\Steps\SalesOperation\NecessaryDocStep;
use App\Steps\SalesOperation\ProcessStep;
use App\Steps\SalesOperation\StationStep;
use Ycs77\LaravelWizard\Wizardable;

class SalesOperationWizardController extends Controller
{
    use Wizardable;

    /**
     * The wizard name.
     *
     * @var string
     */
    protected $wizardName = 'sales_operation';

    /**
     * The wizard title.
     *
     * @var string
     */
    protected $wizardTitle = 'Sales operation';

    /**
     * The wizard options.
     *
     * @var array
     */
    protected $wizardOptions = [];

    /**
     * The wizard steps instance.
     *
     * @var array
     */
    protected $steps = [
        ProcessStep::class,
        DocumentStep::class,
        IntelligentStep::class,
        DealerStep::class,
        StationStep::class,
        NecessaryDocStep::class,
        GuaranteeStep::class,
    ];
}
