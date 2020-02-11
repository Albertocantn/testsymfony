<?php
namespace App\Command;

use App\Service\GetTimeZoneService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetTimeZoneCommand extends Command
{
    protected static $defaultName = 'app:get-timezone';
    private $timezone;

    public function __construct(GetTimeZoneService $timezone)
    {
        parent::__construct();
        $this->timezone = $timezone;

    }

    protected function configure()
    {
        $this
            ->setDescription('This command get all timezones')
            ->setHelp('This command allows you to get all timezones');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Get All TimeZones',
            '============',
            '',
        ]);

        $timezones=$this->timezone->getTimeZone();

        foreach ($timezones as $timezone){
            $output->writeln([
                $timezone
            ]);
        }




        $output->writeln([
            '============',
            '',
        ]);


        return 0;
    }
}

?>
