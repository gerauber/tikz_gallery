\usepackage{tkz-euclide}
...
\begin{tikzpicture}[node distance=2cm, font=\small]
    \def\ll{1.9}
    \def\bb{6.4}

    %%%%% quarks
    \def\x{0}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $u$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize up}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 2.3 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $c$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize charm}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 1.27 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $t$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize top}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 173.1 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{0}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $d$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize down}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 4.8 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $s$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize strange}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 95 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $b$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize bottom}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 4.2 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    %%%%%%%%%%%%%%%%%%%% leptons

    \def\x{0}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $e$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize electron}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0.511 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.68) {{\Huge $\mu$}}; % make it a bit lower
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize muon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 105.7 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\tau$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize tau}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 1.78 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{0}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\nu_e$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $e$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;2.2 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.7) {{\Huge $\nu_\mu$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $\mu$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;0.17 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\nu_\tau$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $\tau$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;15.5 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    %%% bosons

    \def\x{\bb}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $g$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize gluon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\gamma$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize photon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $W$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $W$ boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 80.4 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize $\pm$1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $Z$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $Z$ boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 91.2 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb+\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=yellow!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $H$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize Higgs boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 126 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 0}};

    %%%% shape for forces
    % gluon
    \draw [rounded corners=8pt, draw=blue!80, thick] (-0.1,0)|-node{ }(3.8,1.6);
    \draw [rounded corners=8pt, draw=blue!80, thick] (8.0,0.8)|-node{ }(3.8,1.6);
    \draw [rounded corners=8pt, draw=blue!80, thick] (8.0,0.8)|-node{ }(6.8, -0.1);
    \draw [rounded corners=8pt, draw=blue!80, thick] (5.4, -1.3)|-node{ }(6.8, -0.1);
    \draw [rounded corners=8pt, draw=blue!80, thick] (5.4, -1.3)|-node{ }(3.6, -2);
    \draw [rounded corners=8pt, draw=blue!80, thick] (-0.1,0)|-node{ }(3.6, -2);

    % gamma
    \draw [rounded corners=8pt, draw=red!60, thick] (-0.2,0)|-node{ }(3.8,1.7);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, 0.4)|-node{ }(3.8,1.7);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, 0.4)|-node{ }(6.8,-0.3);
    \draw [rounded corners=8pt, draw=red!60, thick] (8.0, -1)|-node{ }(6.8,-0.3);
    \draw [rounded corners=8pt, draw=red!60, thick] (8.0, -1)|-node{ }(6.8,-2.0);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, -3)|-node{ }(6.8,-2.0);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, -3)|-node{ }(2,-3.9);
    \draw [rounded corners=8pt, draw=red!60, thick] (-0.2,0)|-node{ }(2,-3.9);

    % wz
    \draw [rounded corners=8pt, draw=teal!80, thick] (-0.3,0)|-node{ }(3.8,1.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (5.6, -1)|-node{ }(3.8,1.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (5.6, -1)|-node{ }(6.8,-2.2);
    \draw [rounded corners=8pt, draw=teal!80, thick] (8.0, -2.6)|-node{ }(6.8,-2.2);
    \draw [rounded corners=8pt, draw=teal!80, thick] (8.0, -2.6)|-node{ }(6.8,-5.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (-0.3,0)|-node{ }(6.8,-5.8);


\end{tikzpicture}