%%%%%%%%%%%%%%%%%%%%%%%%%%
%%% Clase Lugar Geométrico de las Raíces
%%% Autor:  Nadia Rosero
%%% Fecha: 22/02/19
%%%%%%%%%%%%%%%%%%%%%%%%%%

%% Planta lazo abierto
num=964;
den=[976 11.25 1];
roots(den)
ol=tf(num,den);
rlocus(ol)
step(ol)
bode(ol)
%%%planta inestable por integrador
%% Espacio de estados
[A,B,C,D] = tf2ss(num,den);
sys=ss(A,B,C,D);
%% Análisis de controlabilidad
Co=ctrb(sys)
rank(Co)
%% Planta lazo cerrado
cl=feedback(ol,1)
pc=[976 11.25 1];
roots(pc)
rlocus(ol)
%% Análisis variaciones de K
K=9;
pc=[1 6 K];
roots(pc)
cl=tf(K,pc);
step(cl)
bode(cl)

%% Efecto de añadir polo
polo=[1 4];
nden=conv(den,polo)
roots(nden)
nol=tf(num,nden);
step(nol)
rlocus(nol)
K=17;
ncl=feedback(K*nol,1);
step(ncl)
%%% corre e LGR a la derecha, màs inestable

%% Efecto de añadir cero
cero=[1 10];
nol=tf(cero,den);
step(nol)
rlocus(nol)
K=9;
ncl=feedback(K*nol,1);
step(ncl)
%%% corre e LGR a la izquierda, más estable
