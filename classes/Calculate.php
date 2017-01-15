<?php

class Calculate
{
	public function getChange()
	{
		$bank500 = floor($total/500);
		$bank100 = floor($total%500/100);
		$bank50 = floor($total%500%100/50);
		$bank20 = floor($total%500%100%50/20);
		$bank10 = floor($total%500%100%50%20/10);
		$result_change = array(
								"bank500" => $bank500
								,"bank100" => $bank100
								,"bank50" => $bank50
								,"bank20" => $bank20
								,"bank10" => $bank10);
		return $result_change;

	}
}
