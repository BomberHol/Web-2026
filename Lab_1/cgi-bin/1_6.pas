PROGRAM PrintName(INPUT, OUTPUT);
USES
  DOS;       
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF PosName = 0
  THEN
    WRITELN('Hello Anonymous!')
  ELSE
    BEGIN
      Name := Copy(QueryString, PosName + 5);
      WRITELN('Hello dear, ', Name, '!')
    END
END.
