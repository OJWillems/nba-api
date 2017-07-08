<?php
declare(strict_types = 1);

namespace JasonRoman\NbaApi\Params\Stats;

/**
 * Range type is value in tenths of a second elapsed in a game.
 */
class RangeTypeParam extends AbstractStatsParam
{
    const MIN = 0;
    const MAX = 2;

    const COMPLETE_WITH_DNP_PLAYERS    = 0;
    const COMPLETE_WITHOUT_DNP_PLAYERS = 1;
    const LIMITED_BY_RANGE             = 2;

    /**
     * {@inheritdoc}
     * @return int
     */
    public static function getDefaultValue() : int
    {
        return self::MIN;
    }
}