rule Este_arquivo_Contem_Padroes_malicosos
{
meta:
		description="Simple Rule"
		author = "IronLinux"
		date = "2021-04-28"
		
	strings:
		$stringdeteste = "flag"
	condition:
		any of them
}