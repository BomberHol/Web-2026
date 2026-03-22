PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;       
VAR
  Looking: CHAR;
  QueryString, Mask: STRING;
  Index: INTEGER;
BEGIN {SarahRevere}
  QueryString := GetEnv('QUERY_STRING');
  Mask := 'lanterns=0';
  Index := 1;
  Looking := 'Y';
  WHILE (Index <= 10) AND (Looking = 'Y')
  DO
    BEGIN
      IF (Index < 9) AND (QueryString[Index] <> Mask[Index])
      THEN
        Looking := 'N'
      ELSE
        IF Index = 10
        THEN
          Looking := QueryString[Index];
      Index := Index + 1 
    END;
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF Looking = '1'
  THEN
    WRITELN(QueryString, ', ', 'The British are coming by land.')
  ELSE
    IF Looking = '2'
    THEN
      WRITELN(QueryString, ', ', 'The British coming by sea.')
    ELSE
      WRITELN(QueryString, ', ', 'Sarah didn''t say')
END. {Sarah revere}
