<?php

require_once 'lib/NumberUtil.php';
require_once 'lib/DateTimeUtil.php';
require_once 'lib/CalcResult.php';



class Controller {

	private $count;
	private $start;
	private $end;
	private $duplicate;
	private $allTime;

	public function __construct() {
		$count = $_POST['count'];
		$startHour = $_POST['startHour'];
		$startMinute = $_POST['startMinute'];
		$endHour = $_POST['endHour'];
		$endMinute = $_POST['endMinute'];
		$duplicateHour = $_POST['duplicateHour'];
		$duplicateMinute = $_POST['duplicateMinute'];

		$this->count = intval($count);
		$this->start = DateTimeUtil::getDate($startHour, $startMinute);
		$this->end = DateTimeUtil::getDate($endHour, $endMinute);
		if ($this->end < $this->start) {
			$this->end->modify('+1 day');
		}
		$this->allTime = DateTimeUtil::getAsMinutes($this->start->diff($this->end));
		$this->duplicate = DateTimeUtil::getDate($duplicateHour, $duplicateMinute);
		$this->duplicate = DateTimeUtil::getAsMinutes($this->duplicate);
	}

	public function getResults() {

		$results = [];

		$rmpc = $this->getRestMinutesPerCapita();

		$startTime = clone $this->start;
		for ($i = 0; $i < $this->count; $i++) {
			$endTime = clone $startTime;
			$endTime->modify("{$rmpc} minutes");
			$results[] = new CalcResult($i + 1, $startTime, $endTime);
			$startTime = clone $endTime;
			$startTime->modify("-{$this->duplicate} minutes");
		}

		if ($endTime > $this->end) {
			$over = DateTimeUtil::getAsMinutes($endTime->diff($this->end));
			(end($results)->end)->modify("-{$over} minutes");
			(end($results)->start)->modify("-{$over} minutes");

			if ($this->count > 2) {
				$i = 1;

				$max = $this->count - 1;

				while ($over > 0) {
					($results[$i]->end)->modify("-5 minutes");
					($results[$i]->start)->modify("-5 minutes");
					$over = $over - 5;
					++$i;
					if ($i === $max) {
						$i = 0;
					}
				}

			}

		}

		return $results;
	}

	public function getRestMinutesPerCapita() {
		$restMinutes = ($this->allTime + $this->duplicate * ($this->count - 1)) / $this->count;
		return NumberUtil::ceilPerAny($restMinutes, 5);
	}

}
header("Content-type: text/html");
$controller = new Controller();
?>
<h2>計算結果</h2>
<div>休憩時間 一人あたり <?php echo $controller->getRestMinutesPerCapita(); ?>分</div>
<table class="resultTable">
	<tbody>
<?php foreach ($controller->getResults() as $r) { ?>
		<tr>
			<th><?php echo $r->count; ?>人目</th>
			<td><?php echo $r->getStartTime(); ?> ～ <?php echo $r->getEndTime(); ?></td>
		</tr>
<?php } ?>
	</tbody>
</table>
