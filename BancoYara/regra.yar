rule Este_arquivo_Contem_Padroes_malicosos
{
meta:
		description="Simple Rule"
		author = "IronLinux"
		date = "2021-04-28"
		
	strings:
		$string1 = "teste"
		$string2 = "eu nao sou um malware"
		$string3 = "P4H?/W1"
		$string4 = "word/endnotes.xml"
		$string5 = "shutdown.exe -s"
		$string6 = "ZFBMD23000989030000153c0000f6560000a278000083d7000046240100af4f0100bbd101004339020047840200" 
	condition:
		any of them
}