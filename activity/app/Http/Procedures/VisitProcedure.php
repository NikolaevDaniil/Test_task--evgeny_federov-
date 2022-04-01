<?php
declare(strict_types=1);

namespace App\Http\Procedures;

use App\Models\Visit;
use Sajya\Server\Procedure;

class VisitProcedure extends Procedure
{
    public static string $name = 'visit';

    public function save(string $url)
    {
        return Visit::create(['url' => $url]);
    }

    public function get(int $page)
    {
        return Visit::selectRaw('url, count(*) as url_count, max(created_at) as last_created')
            ->groupBy('url')
            ->paginate(5, ['*'], 'page', $page);

    }
}
