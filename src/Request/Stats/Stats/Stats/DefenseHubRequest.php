<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Stats;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Params\Stats\GameScopeParam;
use JasonRoman\NbaApi\Params\Stats\PlayerOrTeamParam;
use JasonRoman\NbaApi\Params\Stats\PlayerScopeParam;
use JasonRoman\NbaApi\Params\Stats\SeasonTypeParam;
use JasonRoman\NbaApi\Request\AbstractStatsRequest;

class DefenseHubRequest extends AbstractStatsRequest
{
    const ENDPOINT = '/stats/defensehub';

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
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $season;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(GameScopeParam::OPTIONS_LAST_10_YESTERDAY)
     *
     * @var string
     */
    public $gameScope;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PlayerScopeParam::OPTIONS)
     *
     * @var string
     */
    public $playerScope;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PlayerOrTeamParam::OPTIONS)
     *
     * @var string
     */
    public $playerOrTeam;
}