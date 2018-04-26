<?php
$data = get_info();

echo json_encode($data);

function get_info() {
    $url = "http://rate.bot.com.tw/gold/quote/recent"; //您想抓取的網址
	
	$page_content = file_get_contents($url);
    $page_content = str_replace(array("\r\n","\n"), array("",""), $page_content);

	if(preg_match_all('/<table class="table table-bordered table-condensed table-hover footable toggle-circle" title="歷史黃金牌價" summary="此表格是新台幣黃金牌價，由九個小表格組成，分別是黃金存摺、黃金條塊、臺銀金鑽條塊、臺銀金鑽條塊生肖版、幻彩條塊、金幣、白銀條塊、銀幣及發貨單。此表格為黃金存摺，有三直欄，第一直欄是品名，第二直欄是買賣別，第三直欄是一公克金額。">(.*)<\/table>/U', $page_content, $matches)) {
		if(preg_match_all('/<td class="text-right">(.*)<\/td>/U', $matches[0][0], $matches2)) {
		} else {
			return "掛了 Orz...";
		}
	} else {
		return "掛了 Orz...";
	}
	return $matches2[1];
}