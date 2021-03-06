<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Video;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

class VideoStatusRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/videostatus';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(LeagueIdParam::FORMAT)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $gameDate;
}