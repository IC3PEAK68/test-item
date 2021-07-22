<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задание 3.3");
?><?if(CModule::IncludeModule("iblock")):?>
	<?$arSelect = Array("NAME", "PRICE_1");
	$arFilter = Array("IBLOCK_ID"=> 2);

	$res = CIBlockElement::GetList(
		Array(),
		$arFilter,
		false,
		false,
		$arSelect
	);?>

	<table style="border: 1px solid grey; table-layout: fixed; width: 100%">
		<?while($ob = $res->GetNextElement()) :
			$arFields = $ob->GetFields();?>
			<tr>
				<td style="border: 1px solid grey">
					<?=$arFields["NAME"];?>
				</td>
                <td style="border: 1px solid grey">
					<?=$arFields["PRICE_1"];?>
				</td>
			</tr>
		<?endwhile?>
	</table>
<?endif?>
<script>
	$(document).ready(function () {
		$('tr').click(function () {
			if($(this).hasClass('color_row')) {
				$(this).removeClass('color_row');
			} else {
				$(this).addClass('color_row');
			}
		});
	})
	</script>

	<style type="text/css">
		tr.color_row
		{
			background-color: red;
		}
	</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>