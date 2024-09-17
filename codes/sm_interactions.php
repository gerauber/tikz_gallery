\usepackage{tkz-euclide}
...
\begin{tikzpicture}[node distance=2cm]
    \def\sq{1.2}
    \def\bb{5}
    \def\ldqlv{-1}
    \def\llqlv{2}
    \def\llb{2}

    % self interactions
    % H
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(2*\bb+0.5*\sq+0.3*\sq,\ldqlv-1*\llqlv+0.5*\sq) 
    (2*\bb+\sq+0.3*\sq,\ldqlv-1*\llqlv+0.7*\sq) 
    (2*\bb+1.5*\sq,\ldqlv-1*\llqlv+0.5*\sq) 
    (2*\bb+\sq+0.3*\sq,\ldqlv-1*\llqlv+0.3*\sq) 
    (2*\bb+0.5*\sq+0.3*\sq,\ldqlv-1*\llqlv+0.5*\sq)};
    % g
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(\bb+0.5*\sq+0.3*\sq,+0.5*\sq) 
    (\bb+\sq+0.3*\sq,+0.7*\sq) 
    (\bb+1.5*\sq,+0.5*\sq) 
    (\bb+\sq+0.3*\sq,+0.3*\sq) 
    (\bb+0.5*\sq+0.3*\sq,+0.5*\sq)};

    % W
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(\bb+0.5*\sq+0.3*\sq,-2*\llqlv+0.5*\sq-0.2*\sq) 
    (\bb+\sq+0.3*\sq,-2*\llqlv+0.7*\sq-0.2*\sq) 
    (\bb+1.5*\sq,-2*\llqlv+0.5*\sq-0.2*\sq) 
    (\bb+\sq+0.3*\sq,-2*\llqlv+0.3*\sq-0.2*\sq) 
    (\bb+0.5*\sq+0.3*\sq,-2*\llqlv+0.5*\sq-0.2*\sq)};

    % other interactions
    % q
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=15] (5.5,0.7);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=20] (10.5,-2.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-1.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-3.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-5.5);
    % l
    \draw [draw=black, thick] (0.5,-2.1) to [bend left=15] (5.5,-1.6);
    \draw [draw=black, thick] (0.5,-2.2) to [bend right=2] (10.5,-2.5);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=10] (5.5,-3.4);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=15] (5.5,-5.5);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=15] (0.5,-4.5);
    % v
    \draw [draw=black, thick] (0.5,-4.5) to [bend left=10] (5.5,-3.6);
    \draw [draw=black, thick] (0.5,-4.5) to [bend right=15] (5.5,-5.5);
    % gam
    %\draw [draw=black, thick] (5.5,-1.5) to [bend left=10] (5.5,-3);
    % gam+W
    \draw [draw=black, thick] (5.5,-1.5) to [bend left=10] (5.5,-5.5);
    % W
    %\draw [draw=black, thick] (5.5,-3.5) to [bend left=10] (5.5,-5.5);
    \draw [draw=black, thick] (5.5,-3.2) to [bend right=5] (10.5,-2.7);
    % H
    \draw [draw=black, thick] (5.5,-5.5) to [bend right=30] (10.7,-2.7);

    %%%%% quarks
    \def\x{0}
    \def\y{\ldqlv}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+\sq,\y+\sq);
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $q$}};

    %%%%%%%%%%%%%%%%%%%% leptons
    \def\x{0}
    \def\y{\ldqlv-1*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\ell$}};


    \def\x{0}
    \def\y{\ldqlv-2*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\nu$}};

    %%% bosons
    \def\x{\bb}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $g$}};

    \def\x{\bb}
    \def\y{-\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\gamma$}};

    \def\x{\bb}
    \def\y{-2*\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $W$}};

    \def\x{\bb}
    \def\y{-3*\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $Z$}};

    \def\x{2*\bb}
    \def\y{\ldqlv-1*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=yellow!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $H$}};
\end{tikzpicture}