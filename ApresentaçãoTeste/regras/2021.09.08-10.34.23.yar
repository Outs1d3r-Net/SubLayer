rule Este_arquivo_Contem_Padroes_malicosos
{
meta:
		description="Simple Rule"
		author = "IronLinux"
		date = "2021-04-28"
		
	strings:
		$string1 = "Leonardo Henrique dos Santos"
		$string2 = "e99651aa5c5dcf9128adc8da685f1295b959f640a173098d07018b030d529509"
		$string3 = "P4H?/W1"
		$string4 = "word/endnotes.xml"
		$string5 = "shutdown.exe -s"
		$string6 = "ZFBMD23000989030000153c0000f6560000a278000083d7000046240100af4f0100bbd101004339020047840200" 
	condition:
		any of them
}