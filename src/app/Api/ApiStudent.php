<?php
namespace App\Api;
class ApiStudent
{
	public function init ($request, $response)
	{
		//学生マスタ情報
		$student = [
			['stu_id' => '20020001','stu_name' => 'AUNG','stu_sex' => '男性','stu_birthday' => '1998-05-21',],
			['stu_id' => '20020002', 'stu_name' => 'Shou', 'stu_sex' => '男性', 'stu_birthday' => '1996-05-21', ],
			['stu_id' => '20020003', 'stu_name' => 'CHOU', 'stu_sex' => '女性', 'stu_birthday' => '1999-07-11', ],
			['stu_id' => '20020004', 'stu_name' => 'KANG', 'stu_sex' => '男性', 'stu_birthday' => '1998-01-11', ],
			['stu_id' => '20020005', 'stu_name' => 'UMA', 'stu_sex' => '男性', 'stu_birthday' => '1998-02-17', ],
			['stu_id' => '20020006', 'stu_name' => 'KIN', 'stu_sex' => '女性', 'stu_birthday' => '1998-03-25', ],
			['stu_id' => '20020007', 'stu_name' => 'CHAO', 'stu_sex' => '男性', 'stu_birthday' => '1998-06-14', ],
			['stu_id' => '20020008', 'stu_name' => 'RAO', 'stu_sex' => '女性', 'stu_birthday' => '1999-08-28', ],
			['stu_id' => '20020009', 'stu_name' => 'SHAO', 'stu_sex' => '男性', 'stu_birthday' => '1997-05-31', ],
			['stu_id' => '20020010', 'stu_name' => 'JOU', 'stu_sex' => '女性', 'stu_birthday' => '1998-09-12', ],
		];
		//テスト結果情報
		$testkekka = [
			['stu_id' => '20020001', 'kokugo_point' =>'66','eigo_point' => '67','suugaku_point' => '37'],
			['stu_id' => '20020002', 'kokugo_point' =>'72','eigo_point' => '23','suugaku_point' => '88'],
			['stu_id' => '20020003', 'kokugo_point' =>'82','eigo_point' => '67','suugaku_point' => '86'],
			['stu_id' => '20020004', 'kokugo_point' =>'89','eigo_point' => '58','suugaku_point' => '38'],
			['stu_id' => '20020005', 'kokugo_point' =>'88','eigo_point' => '37','suugaku_point' => '69'],
			['stu_id' => '20020006', 'kokugo_point' =>'56','eigo_point' => '65','suugaku_point' => '99'],
			['stu_id' => '20020007', 'kokugo_point' =>'78','eigo_point' => '38','suugaku_point' => '71'],
			['stu_id' => '20020008', 'kokugo_point' =>'91','eigo_point' => '88','suugaku_point' => '63'],
			['stu_id' => '20020009', 'kokugo_point' =>'39','eigo_point' => '77','suugaku_point' => '76'],
			['stu_id' => '20020010', 'kokugo_point' =>'68','eigo_point' => '56','suugaku_point' => '36'],
		];
		
		//学籍番号＝＞名前の連想配列を作成する
		$stu_nameList = array_column($student, 'stu_name', 'stu_id');
		//error_log(print_r($stu_nameList,true));

		//作成された連想配列を参照し、学籍番号に該当する名前をtestkekkaにセットする
		$kekka = [];
		foreach($testkekka as $key => $value){
			$value['stu_name'] = $stu_nameList[$value['stu_id']];
			$kekka[] = $value;		
	    }
		$result = [
			'stu_data'       => $student,
			'testkekka_data' => $kekka
		];
		return json_encode($result, JSON_UNESCAPED_UNICODE);
	}
}